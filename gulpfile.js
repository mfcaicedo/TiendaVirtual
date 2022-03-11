//haremos un construction para iniciar algunos argumentos que necesito para el sass
const { src, dest, watch, parallel } = require('gulp');

//Código necesario para iniciar gulp sass 
var sass  = require('gulp-sass');
var compiler = require('sass');
sass.compiler = compiler;
var sass = require('gulp-sass')(require('sass'));

//Ahora instalamos todas las dependencias necesarias para el pryecto 
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const notify = require('gulp-notify');
const cache = require('gulp-cache');
const webp = require('gulp-webp');

//rutas especificas para hacer llamada de los paquetes
const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

//css es una función qeu se puede llamar automaticamente
function css(){
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./build/css'));

}

//js es una función para compilar todas las extensiones que se instalaron posteriormente 
function javascript(){
    return src(paths.js)
        .pipe(sourcemaps.init())
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(rename({ suffix: '.min'}))
        .pipe(dest('./build/js'))
}

function imagenes(){
    return src(paths.imagenes)
        .pipe(cache(imagemin({ optimizationLevel: 3})))
        .pipe(dest('build/img'))
        .pipe(notify({message: 'Imagen lista'}));
}

function versionWebp(){
    return src(paths.imagenes)
        .pipe(webp())
        .pipe(dest('build/img'))
        .pipe(notify({ message: 'Imagen lista'}));
}

function watchArchivos(){
    watch( paths.scss, css); 
    watch( paths.js, javascript);
    watch( paths.imagenes, imagenes);
    watch( paths.imagenes, versionWebp);
}

//se encarga de ejecutar todas las anteriores funciones de manera paralela 
exports.default = parallel(css, javascript, imagenes, versionWebp, watchArchivos);



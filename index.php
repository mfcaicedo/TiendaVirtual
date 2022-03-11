<?php

    //incluyo el tamplate de header 
    @include 'includes/templates/header.php';

?>
<main class="contenedor">
    <div class="imagen-header">
            <img class="imagen-inicio" src="build/img/imagen1.webp" alt="imagen principal">
    </div>
    <div class="descripcion">
        <h1>Tienda virtual de libros</h1>
        <div class="texto-descripcion">
            <p>
            Aquí puedes encontrar todos los libros que desees.. y lo mejor de todo es que los ofrecemos a 
            un excelente precio, brindamos la mejor atensión y también puedes leer los primeros capítulos 
            totalmente grátis. Anímate a comprar nuestros productos...
            </p>
        </div>
    </div>

    <h4>Galería de libros en venta</h4>
    <div class="galeria">

    <!--INCLUYO UN TEMPLATE -->
    <?php  
    
        include 'includes/templates/libros.php';

    ?>

        <!-- <div class="libro">
            <img src="build/img/librocienaños.webp" alt="cien años de soledad">
            <div class="datos-libro">
                <table class=" tabla tabla-libros">
                    <thead>
                        <tr>
                            <th>Datos</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre:</td>
                            <td>Cien Años de Soledad</td>
                        </tr>
                        <tr>
                            <td>Autor:</td>
                            <td>Gabriel García Márquez</td>
                        </tr>
                        <tr>
                            <td>Año:</td>
                            <td>1990</td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <td>Sinopsis:</td>
                            <td>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Ipsa delectus adipisci tempora, veritatis vel recusandae mollitia,
                                eum repellendus deleniti sapiente molestiae, quod ad cumque nesciunt
                                ex debitis quae. Fuga, tempora.
                            </p>
                            </td>
                        </tr>
                </table>

            </div>datos libro
            <div class="boton-libro">
                <a class="boton-amarillo" href="compra.php">Agregar al carrito</a>
                <a class="boton-gris" href="libro.php">Ver detalles</a>
            </div>
        </div>libro

        <div class="libro">
            <img src="build/img/libroiartificial.webp" alt="inteligencia artificial">
            <div class="datos-libro">
                <table class=" tabla tabla-libros">
                    <thead>
                        <tr>
                            <th>Datos</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre:</td>
                            <td>Cien Años de Soledad</td>
                        </tr>
                        <tr>
                            <td>Autor:</td>
                            <td>Gabriel García Márquez</td>
                        </tr>
                        <tr>
                            <td>Año:</td>
                            <td>1990</td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <td>Sinopsis:</td>
                            <td>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Ipsa delectus adipisci tempora, veritatis vel recusandae mollitia,
                                eum repellendus deleniti sapiente molestiae, quod ad cumque nesciunt
                                ex debitis quae. Fuga, tempora.
                            </p>
                            </td>
                        </tr>
                </table>

            </div><!--datos libro
            <div class="boton-libro">
                <a class="boton-amarillo" href="compra.php">Agregar al carrito</a>
                <a class="boton-gris" href="libro.php">Ver detalles</a>
            </div>
        </div><!--libro

        <div class="libro">
            <img src="build/img/librojava.webp" alt="cien años de soledad">
            <div class="datos-libro">
                <table class=" tabla tabla-libros">
                    <thead>
                        <tr>
                            <th>Datos</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre:</td>
                            <td>Cien Años de Soledad</td>
                        </tr>
                        <tr>
                            <td>Autor:</td>
                            <td>Gabriel García Márquez</td>
                        </tr>
                        <tr>
                            <td>Año:</td>
                            <td>1990</td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <td>Sinopsis:</td>
                            <td>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Ipsa delectus adipisci tempora, veritatis vel recusandae mollitia,
                                eum repellendus deleniti sapiente molestiae, quod ad cumque nesciunt
                                ex debitis quae. Fuga, tempora.
                            </p>
                            </td>
                        </tr>
                </table>

            </div><!--datos libro
            <div class="boton-libro">
                <a class="boton-amarillo" href="compra.php">Agregar al carrito</a>
                <a class="boton-gris" href="libro.php">Ver detalles</a>
            </div>
        </div>libro -->
    </div><!--galeria-->

</main>
<section class="contenedor eligenos">
    <h3>¿Por qué elegirnos?</h3>
    <div class="anuncios">
        <div class="anuncio">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                    <circle cx="18" cy="18" r="4" />
                    <path d="M15 3v4" />
                    <path d="M7 3v4" />
                    <path d="M3 11h16" />
                    <path d="M18 16.496v1.504l1 1" />
                </svg>
            </div>
            
            <div class="texto">
                <h4>Entregas a tiempo</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vero ipsum ea magni facere nemo odit recusandae sapiente placeat nostrum!
                    Iure eligendi autem cum vel deserunt harum similique facilis commodi ut.
                </p>
            </div>
        </div><!-- anuncio -->

        <div class="anuncio">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="7" cy="17" r="2" />
                    <circle cx="17" cy="17" r="2" />
                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                </svg>
            </div>
        
        <div class="texto">
            <h4>Envios a nivel nacional</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero ipsum ea magni facere nemo odit recusandae sapiente placeat nostrum!
                Iure eligendi autem cum vel deserunt harum similique facilis commodi ut.
            </p>
        </div>
        </div><!-- anuncio -->

        <div class="anuncio">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-discount" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M20 6l-1 7h-13" />
                    <path d="M10 10l6 -6" />
                    <circle cx="10.5" cy="4.5" r=".5" />
                    <circle cx="15.5" cy="9.5" r=".5" />
                </svg>
            </div>
        
        <div class="texto">
            <h4>Excelentes descuentos</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero ipsum ea magni facere nemo odit recusandae sapiente placeat nostrum!
                Iure eligendi autem cum vel deserunt harum similique facilis commodi ut.
            </p>
        </div>
        </div><!-- anuncio -->

        <div class="anuncio">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-accessible" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="9" />
                    <path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1" />
                    <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                </svg>
            </div>
        
        <div class="texto">
            <h4>Calidad del servicio</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero ipsum ea magni facere nemo odit recusandae sapiente placeat nostrum!
                Iure eligendi autem cum vel deserunt harum similique facilis commodi ut.
            </p>
        </div>
        </div><!-- anuncio -->
    </div><!-- anuncios -->

</section><!--Eligenos-->
<section class="contenedor contactar">
    <div class="contactar-registro">
        <h4>¡HEY! ¿Quiéres saber más? <span>Registrate Con Nosotros</span></h4>
        <a class="boton boton-verde" href="contacto.php">Registrarse</a>
    </div>
</section>

<section class="contenedor contenedor-articulos">
    <h3>Artículos publicados por nuestros usuarios últimamente</h3>
    <div class="articulos">
        <div class="articulo">
            <h4>Guia para ser un desarrollador profesional</h4>
            <div class="datos-autor">
                <p>Autor: <span>Milton Caicedo</span></p>
                <p>Fecha publicación: <span>5/08/2021</span></p>
            </div>
            <div class="contenido-articulo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur culpa, fuga doloribus a sapiente eius dolorem iste voluptate incidunt. 
                    Temporibus rerum nulla est rem odit explicabo assumenda aliquid quis officiis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur culpa, fuga doloribus a sapiente eius dolorem iste voluptate incidunt. 
                    Temporibus rerum nulla est rem odit explicabo assumenda aliquid quis officiis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur culpa, fuga doloribus a sapiente eius dolorem iste voluptate incidunt. 
                    Temporibus rerum nulla est rem odit explicabo assumenda aliquid quis officiis...
                </p>
            </div>
            <div class="botones">
                <a class="boton boton-azul" href="articulos.php">Ver más</a>
            </div>
        </div><!--articulo-->

        <div class="articulo">
            <h4>Guia para ser un programador de Back-End profesional</h4>
            <div class="datos-autor">
                <p>Autor: <span>Feney Caicedo</span></p>
                <p>Fecha publicación: <span>4/08/2021</span></p>
            </div>
            <div class="contenido-articulo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur culpa, fuga doloribus a sapiente eius dolorem iste voluptate incidunt. 
                    Temporibus rerum nulla est rem odit explicabo assumenda aliquid quis officiis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur culpa, fuga doloribus a sapiente eius dolorem iste voluptate incidunt. 
                    Temporibus rerum nulla est rem odit explicabo assumenda aliquid quis officiis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur culpa, fuga doloribus a sapiente eius dolorem iste voluptate incidunt. 
                    Temporibus rerum nulla est rem odit explicabo assumenda aliquid quis officiis...
                </p>
            </div>
            <div class="botones">
                <a class="boton boton-azul" href="articulos.php">Ver más</a>
            </div>
        </div><!--articulo-->
    </div><!--articulos-->
</section>

<!-- INCLUYO EN TAMPLATE DE FOOTER -->
<?php
    @include 'includes/templates/footer.php'
?>

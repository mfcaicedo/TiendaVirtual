//Genera la accion listener cuando la página arranque
document.addEventListener('DOMContentLoaded',function(){

    navegacionFija();

});

//funciones 
function navegacionFija(){
    //selecciono al header 
    const header = document.querySelector('.header'); 

    //Observador de clase para mostrar o no la navegación fija 
    const observarNavegacion = new IntersectionObserver(function(entries){
        //  console.log("nav "+entries[0].isIntersecting);
        validaciones(entries);    
    });
    //funcion para las validaciones 
    function validaciones(entries) {
        if (entries[0].isIntersecting) {
            // console.log('visible');
            header.classList.remove('barra-fija');
        }else{
            // console.log('no visible');
            header.classList.add('barra-fija');
        }
    }
    //Uso del IntersectionObserver    
    observarNavegacion.observe(document.querySelector('.imagen-header'));
}
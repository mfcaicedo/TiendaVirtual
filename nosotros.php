<?php
    //incluyo el tamplate de header 
    @include 'includes/templates/header.php';
?>
<main class="contenedor nosotros">
    <h1>Acerca de nosotros</h1>
    <div class="contenedor-nosotros">
        <img src="build/img/nosotros.webp" alt="imagen de nosotros">
        <div class="texto-nosotros">
            <h4>Empresa enfocada en el bienestar de nuestros clientes</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rem vero ad itaque sint debitis, error amet, consequatur animi,
                laboriosam possimus corporis delectus provident! Quidem cumque tempora pariatur porro aliquid ut.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rem vero ad itaque sint debitis, error amet, consequatur animi,
                laboriosam possimus corporis delectus provident! Quidem cumque tempora pariatur porro aliquid ut.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rem vero ad itaque sint debitis, error amet, consequatur animi,
                laboriosam possimus corporis delectus provident! Quidem cumque tempora pariatur porro aliquid ut.
            </p>
        </div>
    </div>
    
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

<!-- INCLUYO EN TAMPLATE DE FOOTER -->
<?php
    @include 'includes/templates/footer.php'
?>
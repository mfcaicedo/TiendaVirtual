<?php
    //incluyo el tamplate de header 
    @include 'includes/templates/header.php';
?>
<main class="contenedor">
    <h1>Formulario de registro</h1>
    <p class="parrafo-contacto">Completa todos los campos y luego presiona el boton <span>registrar</span>...</p>

    <div class="contenedor-formulario ">
        <form action="" class="formulario formulario-contacto">
            <fieldset>
                <legend>Información personal</legend>
                
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

                <label for="nombre">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Tu E-mail" required>

                <label for="direccion">Dirección: </label>
                <input type="text" id="direccion" name="direccion" placeholder="Ej: Tu barrio" >
            </fieldset>
            <fieldset>
                <legend>Información de contacto</legend>

                <label for="telefono">Teléfono: </label>
                <input type="number" id="telefono" name="telefono" placeholder="Tu telefono" required >
            </fieldset>

            <input type="submit" class="boton boton-verde" value="Registrar">

        </form>

    </div>
    
</main>

<!-- INCLUYO EN TAMPLATE DE FOOTER -->
<?php
    @include 'includes/templates/footer.php'
?>
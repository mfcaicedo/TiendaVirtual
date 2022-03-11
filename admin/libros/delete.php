<?php 
 
    require '../../includes/config/databases.php';
    
    //Obtengo el nit del libro a eliminar 
    $nit = $_GET['nit'];
    // echo '<pre>';
    // var_dump($nit);
    // echo '</pre>';
    //verificación para evitar valores erroneos del nit 
    if (!$nit) {
        header('Location: ../index.php');
    }
    
    //Realizamos la consulta a la base de datos
    //importo la base de datos 
    $db = conectarDB();

    //realizo la consulta //En este caso elimino un libro directamente 
    $consulta = " DELETE FROM libros WHERE nit = ${nit} ";
    $resultado = mysqli_query($db, $consulta);


    if ($resultado) {
        header('Location: ../index.php?resultado=3');
    }else{
        echo 'No se pudo eliminar el libro';
    }

    // echo '<pre>';
    // var_dump($resultado);
    // echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiendavirtual</title>
    <link rel="stylesheet"  href="../../build/css/app.css" type="text/css">

</head>
<body>

<header class="header">
    <div class="contenedor contenido-header">
        <div class="logo">
            <img class="logo-pagina" src="../../build/img/logo.webp" alt="logo de la página">
        </div>
        <div class="navegacion">
            <nav class="barra navegacion">
                <a href="index.php">Inicio</a>
                <a href="nosotros.php">Quienes Somos</a>
                <a href="articulos.php">Artículos</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>       
    </div>
</header>


<main class="contenedor">
    <h1>Eliminar libro</h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>
    
</main>


<footer class="footer">
    <div class="contenedor contenido-footer">
        <div class="navegacion">
            <nav class="barra-footer navegacion">
                <a href="index.php">Inicio</a>
                <a href="quienesSomos.php">Quienes Somos</a>
                <a href="articulos.php">Artículos</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div> 
        <div class="parrafo">
            <p class="copyrigth">Todos los derechos reservados 2021 &copy;</p>
        </div>
    </div>
</footer>
   <!-- Llamados de scripts de javaScript -->
   <script src="../../build/js/bundle.min.js"></script>
</body>
</html>
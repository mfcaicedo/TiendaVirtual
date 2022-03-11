<?php 

    //Importo la base de datos 
    require '../../includes/config/databases.php';
    $db = conectarDB();


     //RECTIFICO LO QUE TRAJO EL GET DE LA PANTALLA ANTERIOR 
    //  echo "<pre>";
     $nit = $_GET['nit'];
    //  var_dump($nit);
    //  echo "</pre>";

     //valido que el nit sea válido 
     if (!$nit) {
         header('Location: ./index.php');
     }

    //NECESITO MOSTRAR LOS CAMPOS CON LA INFORMACIÓN CORRESPONDIENTE AL ELEMENTO A ACTUALIZAR 
    //Relalizo la consulta 
    $consulta = " SELECT * FROM libros WHERE nit = ${nit};";
    $resultado = mysqli_query($db,$consulta);
    $libro = mysqli_fetch_assoc($resultado);
    // echo "<pre>";
    // var_dump($libro);
    // echo "</pre>";


    //Array para almacenar los errores 
    $errores = [];

    //Intento pasar la información para mostrarla en los campos del formulario 
    $nombre = $libro['nombre']; 
    $autor =  $libro['autor'];
    $anio =  $libro['anioLanzamiento'];
    $sinopsis =  $libro['sinopsis'];
    $precioCompra =  $libro['precioCompra'];
    $precioVenta =  $libro['precioVenta'];

    //valido que se haya presionado el boton submit para poder acceder a su información 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Obtenemos la información de los campos del formulario | también debemos sanitizar esta información 
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']); ;
        $autor = mysqli_real_escape_string($db,$_POST['autor']); 
        $anio = mysqli_real_escape_string($db,$_POST['anio']); 
        $sinopsis = mysqli_real_escape_string($db,$_POST['sinopsis']); 
        $precioCompra = mysqli_real_escape_string($db,$_POST['precioCompra']); 
        $precioVenta = mysqli_real_escape_string($db,$_POST['precioVenta']);   
        
        //agrego las alertas al arreglo de errores
        if (!$nombre) {
            $errores[] = 'Debe digitar el nombre del libro';
        }
        if (!$autor) {
            $errores[] = 'Debe digitar el autor del libro';
        }
        if (!$anio) {
            $errores[] = 'Debe digitar el anio del libro';
        }
        if (!$sinopsis) {
            $errores[] = 'Debe digitar la sinopsis del libro';
        }
        if (!$precioCompra) {
            $errores[] = 'Debe digitar el precio de compra del libro';
        }
        if (!$precioVenta) {
            $errores[] = 'Debe digitar el precio de venta del libro';
        }

        // foreach ($errores as $error) {
        //     echo "<pre>";
        // var_dump($error);
        // echo "</pre>";
        // }

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        //inserto en la base de datos
        if (empty($errores)) {

            $query = " UPDATE libros SET nombre = '${nombre}', autor = '${autor}', anioLanzamiento = '${anio}',
            sinopsis = '${sinopsis}', precioCompra = '${precioCompra}', precioVenta = '${precioVenta}' WHERE nit = ${nit}; ";

             echo "<pre>";
            var_dump($query);
            echo "</pre>";
            //agrego la información a la base de datos 
            //Las dos lineas siguientes son lineas para hacer pruebas
            // header('Location: ../index.php?resultado=2');
            //  exit;
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
               header('Location: ../index.php?resultado=2');
            }else{
                echo 'No se pudo hacer la inserción';
            }


            
        }
    }
    


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


<main class="contenedor ">
    <h1>Actualizar libro</h1>
    <a href="../index.php" class="boton boton-verde">Volver</a>

    <!-- MUESTRO LA NOTIFICACIÓN EN LA PÁGINA CUANDO NO SE LLENAN LOS CAMPOS DEL FORMULARIO -->
    <div class="notificaciones ">
        <?php foreach($errores as $error): ?>
            <div class="errores alerta-error">
                <p> <?php echo $error ?> </p>
            </div>
        <?php endforeach;?>
    </div>

    <div class="formulario-crear">
        <form action="" class="formulario" novalidate method="POST">
                
        <fieldset>
                <legend>Información principal</legend>
                
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre libro" value="<?php echo $nombre ?>" required>

                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" placeholder="Autor" value="<?php echo $autor ?>" required>

                <label for="anio">Año lanzamiento: </label>
                <input type="number" id="anio" name="anio" value="<?php echo $anio ?>" placeholder="Ej: 1990" >

                <label for="sinopsis">Sinopsis:</label>
                <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" ><?php echo $sinopsis ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Información financiera</legend>

                <label for="precioCompra">Precio compra: </label>
                <input type="number" id="precioCompra" name="precioCompra" placeholder="Precio de compra" value="<?php echo $precioCompra ?>" required >

                <label for="precioVenta">Precio venta: </label>
                <input type="number" id="precioVenta" name="precioVenta" placeholder="Precio de venta" value="<?php echo $precioVenta ?>" required >
            </fieldset>

            <input type="submit" class="boton boton-verde" value="Actualizar libro">

        </form>
    </div>

    
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
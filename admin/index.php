<?php 

// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
    //necesario para agregar notificación cuando se crea un libro 
    $id = $_GET['resultado'] ?? null;; 
    // echo "<pre>";
    // var_dump($id);
    // echo "</pre>";

    //importo la base de datos 
    require '../includes/config/databases.php';
    $db = conectarDB();

    //consulta de la base de datos 
    $consulta = "SELECT * FROM libros";
    $resultado = mysqli_query($db, $consulta);
    //muestro resultado de la base de datos 
   

    // while ( $libros = mysqli_fetch_assoc($resultado)) {
    //     echo $libros['nombre'];
    // }



    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiendavirtual</title>
    <link rel="stylesheet"  href="../build/css/app.css" type="text/css">

</head>
<body>

<header class="header">
    <div class="contenedor contenido-header">
        <div class="logo">
            <img class="logo-pagina" src="../build/img/logo.webp" alt="logo de la página">
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
    <h1>Administrador de tienda virtual de libros</h1>

    <!-- NOOTIFICACIONES -->
    <div class="notifiaciones">
        <?php if($id == 1):  ?>
            <div class="alerta alerta-exito">
                <p> <?php echo 'Libro agregado con éxito'; ?> </p>
            </div>
        <?php elseif($id == 2): ?>
            <div class="alerta alerta-exito">
                <p> <?php echo 'Libro actualizado con éxito'; ?> </p>
            </div>    
        <?php elseif($id == 3): ?>
            <div class="alerta alerta-exito">
                <p> <?php echo 'Libro eliminado con éxito'; ?> </p>
            </div> 
        <?php endif;  ?>
    </div>

    <a href="libros/create.php" class="boton boton-verde">Crear</a>

    <div class="contenedor resultado">
        <h4>Lista de libros actuales en la base de datos</h4>

        <table class="tabla tabla-resultados">
            <thead>
                <tr>
                    <th>NIT</th>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Precio compra</th>
                    <th>Precio venta</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while($libros = mysqli_fetch_assoc($resultado)): ?>

                <tr>
                    <td> <?php echo $libros['nit']; ?> </td>
                    <td><?php echo $libros['nombre']; ?></td>
                    <td><?php echo $libros['autor']; ?></td>
                    <td> <?php echo $libros['anioLanzamiento']; ?></td>
                    <td><?php echo $libros['precioCompra']; ?></td>
                    <td><?php echo $libros['precioVenta']; ?></td>
                    <td>
                        <a class="boton boton-rojo" href="libros/delete.php?nit=<?php echo $libros['nit']; ?>">Eliminar</a>
                        <a class="boton boton-azul" href="libros/update.php?nit=<?php echo $libros['nit']; ?>">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>

            <tfoot>

            </tfoot>

        </table>

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
   <script src="../build/js/bundle.min.js"></script>
    
</body>
</html>
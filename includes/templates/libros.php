
<?php 

    require 'includes/config/databases.php';

    //Importo la base de datos 
    $db = conectarDB();


    //realizo la consulta 
    $consulta = " SELECT * FROM libros ";
    $resultado = mysqli_query($db, $consulta);
    

?>

<!-- Muestro los resultados  -->

<?php 
    while($libros = mysqli_fetch_assoc($resultado) ):
?>
    <div class="libro">
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
                                <td><?php echo $libros['nombre']; ?></td>
                            </tr>
                            <tr>
                                <td>Autor:</td>
                                <td><?php echo $libros['autor']; ?></td>
                            </tr>
                            <tr>
                                <td>Año:</td>
                                <td><?php echo $libros['anioLanzamiento']; ?></td>
                            </tr>
                            <tr>
                                <td>Precio:</td>
                                <td><?php echo $libros['precioVenta']; ?></td>
                            </tr>
                            <tr>
                                <td>Sinopsis:</td>
                                <td>
                                <p>
                                <?php echo $libros['sinopsis']; ?>
                                </p>
                                </td>
                            </tr>
                    </table>

                </div><!--datos libro-->
                <div class="boton-libro">
                    <a class="boton-amarillo" href="compra.php">Agregar al carrito</a>
                    <a class="boton-gris" href="libro.php">Ver detalles</a>
                </div>
    </div><!--libro-->
<?php endwhile;?>

<?php 
//CIERRO LA CONEXIÓN 
mysqli_close($db);
?>
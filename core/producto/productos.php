<?php
require 'core/conexion.php';
$sql = "SELECT * FROM productos";
$result = $mysqli->query($sql);
?>
<h2 class="texto-centrado">Lista de productos - Gasolinas</h2>
<a href="?pagina=insertproducto">Insertar producto</a>
<table id="tabla_ventas">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        while ($producto = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $producto['id']; ?></td>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['precio']; ?></td>
                <td>
                    <a href="core/producto/eliminar.php?id=<?php echo $producto['id']; ?>" onclick="return confirm('Estas seguro que quieres eliminar');"><img src="img/borrar.png" alt="Eliminar" height="35px" class="btn-eliminar"></a>
                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>


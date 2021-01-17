<?php
require '../conexion.php';
if (isset($_GET['fecha'])) {
    $fecha = $_GET['fecha'];
    $sql = "SELECT 
        p.nombre,
        p.precio,
        v.id,
        v.fecha,
        v.cantidad,
        v.descuento,
        v.total
    FROM 
        ventas v
    INNER JOIN
        productos p
    ON
        v.id_producto = p.id
    WHERE
        v.fecha = '$fecha'";
    $result = $mysqli->query($sql);
    while ($venta = mysqli_fetch_array($result)) {
?>
        <tr>
            <td><?php echo $venta['fecha']; ?></td>
            <td <?php if ($venta['nombre'] == "Premium") { ?> class="premium" <?php } else if ($venta['nombre'] == "Magna") { ?> class="magna" <?php } else {
                                                                                                                                            } ?>><?php echo $venta['nombre']; ?></td>
            <td>$<?php echo $venta['precio']; ?></td>
            <td><?php echo $venta['cantidad']; ?></td>
            <td><?php echo $venta['descuento']; ?></td>
            <td><?php echo $venta['total']; ?></td>
            <td>
                <a href="core/ventas/eliminar.php?id=<?php echo $venta['id']; ?>"><img src="img/borrar.png" alt="Eliminar" height="35px" class="btn-eliminar"></a>
            </td>
        </tr>
<?php
    }
}
?>
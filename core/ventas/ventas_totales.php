<?php
require 'core/conexion.php';
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
        ORDER BY
            v.id DESC";
$result = $mysqli->query($sql);
?>
<h2 class="texto-centrado">Ventas totales</h2>
<table id="tabla_ventas">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Total</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        while ($venta = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $venta['fecha']; ?></td>
                <td <?php if ($venta['nombre'] == "Premium") { ?> class="premium" <?php } else if ($venta['nombre'] == "Magna") { ?> class="magna" <?php } else {}?>><?php echo $venta['nombre']; ?></td>
                <td>$<?php echo $venta['precio']; ?></td>
                <td><?php echo $venta['cantidad']; ?></td>
                <td><?php echo $venta['descuento']; ?></td>
                <td><?php echo $venta['total']; ?></td>
                <td>
                    <a onclick="return confirm('Estas seguro que quieres eliminar');" href="core/ventas/eliminar.php?id=<?php echo $venta['id']; ?>"><img src="img/borrar.png" alt="Eliminar" height="35px" class="btn-eliminar"></a>
                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Totales</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tfoot>
</table>


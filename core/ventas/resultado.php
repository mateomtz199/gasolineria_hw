<?php
require 'core/conexion.php';
$sql = "SELECT 
            p.nombre,
            p.precio,
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
            v.id DESC
        LIMIT 1";

$result = $mysqli->query($sql);
$venta = mysqli_fetch_array($result);

?>

<h2 class="texto-centrado">Detalle de venta</h2>

<p class="texto-centrado">Fecha <span class="detalleSpan"><?php echo $venta['fecha']; ?></span></p>
<h1 class="texto-centrado"><?php echo $venta['total']; ?></h1>
<p class="texto-centrado">Litros: <span class="detalleSpan"><?php echo $venta['cantidad']; ?></span></p>
<p class="texto-centrado">Gasolina: <span class="detalleSpan"><?php echo $venta['nombre']; ?></span>; 
Precio por litro: <span class="detalleSpan">$<?php echo $venta['precio']; ?></span></p>
<p class="texto-centrado">Descuento: <span class="detalleSpan"><?php echo $venta['descuento']; ?>%</span></p>
<?php 
    mysqli_free_result($result);
?>

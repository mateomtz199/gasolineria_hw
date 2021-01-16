<?php
    require '../conexion.php';
    $id_producto = $_GET['id'];
    $sql = "SELECT precio FROM productos WHERE id = $id_producto";
    $result = $mysqli->query($sql);
    $costo = mysqli_fetch_array($result);
    mysqli_free_result($result);
    echo $costo['precio'];

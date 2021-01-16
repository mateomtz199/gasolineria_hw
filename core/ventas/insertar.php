<?php
    require '../conexion.php';
    if(isset($_POST["cantidad"], $_POST["fecha"])){
        $fecha = $_POST["fecha"];
        $tipo = $_POST["tipo"];
        $cantidad = $_POST["cantidad"];
        $descuento = $_POST["descuento"];
        $total = $_POST["totalEnviar"];


        $sql = "INSERT INTO ventas VALUES (NULL, '$tipo', '$cantidad', '$descuento', '$total', '$fecha', NULL)";
        $mensaje = "";
        if($mysqli->query($sql)){
            header("Location:../../?pagina=2"); 
        } else{
            echo "ERROR: No sabemos que ha pasado, pero, hay un errorsito por ahí";
        }
    }
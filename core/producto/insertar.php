<?php
    require '../conexion.php';
    if(isset($_POST["nombre"], $_POST["precio"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];


        $sql = "INSERT INTO productos VALUES (NULL, '$nombre', '$precio')";
        $mensaje = "";
        if($mysqli->query($sql)){
            header("Location:../../?pagina=productos"); 
        } else{
            echo "ERROR: No sabemos que ha pasado, pero, hay un errorsito por ahí";
        }
    }
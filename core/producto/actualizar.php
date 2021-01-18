<?php
require '../conexion.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $sql = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id='$id'"; 
    if($mysqli->query($sql)){
        header("Location:../../?pagina=productos"); 
    } else{
        echo "ERROR: No sabemos que ha pasado, pero, hay un errorsito por ahí";
    }
}

<?php
require '../conexion.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from productos where id = '$id'"; 
    if($mysqli->query($sql)){
        header("Location:../../?pagina=productos"); 
    } else{
        echo "ERROR: No sabemos que ha pasado, pero, hay un errorsito por ahí";
    }
}

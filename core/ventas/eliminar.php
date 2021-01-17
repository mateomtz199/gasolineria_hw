<?php
require '../conexion.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from ventas where id = '$id'"; 
    if($mysqli->query($sql)){
        header("Location:../../?pagina=4"); 
    } else{
        echo "ERROR: No sabemos que ha pasado, pero, hay un errorsito por ahí";
    }
}

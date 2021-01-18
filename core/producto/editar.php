<?php
require '../conexion.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * from productos where id = '$id'"; 
    $result = $mysqli->query($sql);
    $producto = mysqli_fetch_array($result);
    ?>
    <form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="value="<?php echo $producto['id'] ?>">
    <div class="formulario">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Premium" value="<?php echo $producto['nombre'] ?>" require>
    </div>
    <div class="formulario">
        <label for="Precio">Precio: </label>
        <input class="txt-input" type="number" name="precio" id="precio" value="<?php echo $producto['precio'] ?>" require>

    </div>
    <div class="formulario botones">
        <input class="btn-cancelar" type="reset" value="Cancelar">
        <input class="btn-pagar" type="submit" value="Registrar">
    </div>
</form>
    <?php
}

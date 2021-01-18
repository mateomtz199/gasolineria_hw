<h1 class="texto-centrado">Registro de productos</h1>

<form action="core/producto/insertar.php" method="POST">
    <div class="formulario">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Premium" require>
    </div>
    <div class="formulario">
        <label for="Precio">Precio: </label>
        <input class="txt-input" type="number" name="precio" id="precio" require>

    </div>
    <div class="formulario botones">
        <input class="btn-cancelar" type="reset" value="Cancelar" id="cancelar">
        <input class="btn-pagar" type="submit" value="Registrar">
    </div>
</form>
<h1 class="texto-centrado">CONTROL DE VENTA GASOLINA</h1>

<form action="core/ventas/insertar.php" method="POST">
    <div class="formulario">
        <label for="Fecha">Fecha: </label>
        <input type="date" name="fecha" value="<?php echo date("Y-m-j"); ?>">
    </div>
    <div class="formulario">
        <label for="Tipo">Tipo: </label>
        <select name="tipo" id="tipo">
            <option value="0">Selecciona tipo</option>
            <?php
            $consulta = $mysqli->query("SELECT * FROM productos");
            while ($producto = mysqli_fetch_array($consulta)) {
            ?>
                <option value="<?php echo $producto['id']; ?>"><?php echo $producto['nombre']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="formulario">
        <label for="Precio">Precio: </label>
        <input class="txt-input" type="number" name="precio" id="precio" disabled>

    </div>
    <div class="formulario">
        <label for="Cantidad">Cantidad: </label>
        <input class="txt-input" type="number" name="cantidad" required id="cantidad"> Litros
    </div>
    <div class="formulario">
        <label for="descuento">Descuento: </label>
        <select name="descuento" id="descuento">
            <option value="0">0%</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
        </select>
    </div>
    <div class="formulario">
        <p class="texto-centrado">Total a pagar: <span id="total" class="total">0</span></p>
    </div>
    <div class="formulario botones">
        <input class="btn-cancelar" type="reset" value="Cancelar">
        <input class="btn-pagar" type="submit" value="Pagar">
    </div>
    <input type="hidden" name="totalEnviar" id="totalEnviar">
</form>
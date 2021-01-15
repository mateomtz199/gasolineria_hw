<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Control de ventas gasolina</title>
</head>

<body>
    <div class="contenedor">
        <header>
            <!-- Banner -->
            <div class="fila">
                <img src="img/banner.jpg" alt="Banner">
            </div>

            <!-- Menú -->
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Ventas por días</a></li>
                <li><a href="#">Ventas totales</a></li>
                <li><a href="#">Acerca de</a></li>
            </ul>

        </header>
        <div class="fila">
            <main>
                <h1 class="texto-centrado">CONTROL DE VENTA GASOLINA</h1>

                <form action="">
                    <div class="formulario">
                        <label for="Fecha">Fecha: </label>
                        <input type="date" name="fecha" value="<?php echo date("Y-n-j"); ?>">
                    </div>
                    <div class="formulario">
                        <label for="Tipo">Tipo: </label>
                        <select name="tipo" id="tipo">
                            <option value="premium">Premium</option>
                            <option value="Magna">Magna</option>
                        </select>
                    </div>
                    <div class="formulario">
                        <label for="Precio">Precio: </label>
                        <input class="txt-input" type="number" name="precio" id="precio" disabled>
                    </div>
                    <div class="formulario">
                        <label for="Cantidad">Cantidad: </label>
                        <input class="txt-input" type="number" name="cantidad" required> Litros
                    </div>
                    <div class="formulario">
                        <label for="descuento">Descuento: </label>
                        <select name="descuento" id="descuento">
                            <option value="0">0%</option>
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                        </select>
                    </div>
                    <div class="formulario botones">
                        <input class="btn-cancelar" type="reset" value="Cancelar">
                        <input class="btn-pagar" type="submit" value="Pagar">
                    </div>
                </form>
            </main>
        </div>

    </div>
</body>

</html>
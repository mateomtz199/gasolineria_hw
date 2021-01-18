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
                <li><a href="?pagina=1">Inicio</a></li>
                <li><a href="?pagina=3">Ventas por días</a></li>
                <li><a href="?pagina=4">Ventas totales</a></li>
                <li><a href="?pagina=productos">Productos</a></li>
                <li><a href="?pagina=acercade">Acerca de</a></li>
            </ul>

        </header>
        <div class="fila">
            <!-- Contenedor para las pàginas -->
            <main>
                <?php
                    @$pagina=$_GET['pagina'];
                    switch($pagina){
                        case '1': 
                            include ("core/ventas/form.php");
                        break;
                        case '2':
                            include ("core/ventas/resultado.php");
                        break;
                        case '3':
                            include ("core/ventas/xdia.php");
                            break;
                        case '4':
                            include ("core/ventas/ventas_totales.php");
                            break;
                        case 'acercade':
                            include ("acercade.php");
                            break;
                        case 'productos':
                            include("core/producto/productos.php");
                            break;
                        case 'insertproducto':
                            include("core/producto/form.php");
                            break;
                        case 'editar':
                            include("core/producto/editar.php");
                            break;
                        default: 
                            include ("core/ventas/form.php");
                    }
                ?>
            </main>

        </div>

        <footer>
            <div class="fila">
                <p class="texto-centrado">Este es el pie</p>
            </div>
        </footer>

    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
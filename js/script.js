$(document).ready(function () {
    /* Para cargar automaticamente el precio cuando se selecciona el tipo de gasolina */
    $("#tipo").on('change', function () {
        let id = $("#tipo option:selected").val();
        /* carga de datos desde el servidor y este obtiene los datos de la BD */
        $.get("core/producto/precio.php", { id }, function (data) {
            $("#precio").val(data);
            funciones.calcularPago();
        });
    });

    /* Calcula el total cuando se cambia el valor en cantidad */
    $("#cantidad").on("keyup keydown change", function () {
        funciones.calcularPago();
    });

    /* Calcula el total cuanso se cambia el valor en descuento */
    $("#descuento").on("change", function () {
        funciones.calcularPago();
    });

    /* Colocar en cero el valor del total al dar click en el botón cancelar */
    $("#cancelar").click(function(){
        $("#total").text("0");
    });

    /* Calcula el total de litro y ventas en las tablas ventas */
    let cantidadLitros = 0;
    let totalVentas = 0;
    $('#tabla_ventas tbody').find('tr').each(function (i, el) {
        cantidadLitros += parseFloat($(this).find('td').eq(3).text());
        totalVentas += parseFloat($(this).find('td').eq(5).text());
    });
    $('#tabla_ventas tfoot tr th').eq(3).text("$" + cantidadLitros);
    $('#tabla_ventas tfoot tr th').eq(5).text("$" + totalVentas);

    /* Obtiene los registros con Ajax pasando como parametro la fecha */
    $("#buscarv").click(function () {
        let fecha = $("#fechab").val();
        /* Creamos el objeto ajax para realizar la petición al servidor */
        $.ajax({  
            /* Tipo de consulta get */
            type: "GET",
            /* Url al que dirigiremos, esta realiza la conexión y consulta con la base de datos */
            url: "core/ventas/xdiaselect.php",
            /* Parametro que le pasamos; fecha */
            data: { fecha: fecha },
            /* Tipo de valor en datos de retorno, es ente caso objetos html */
            dataType: "html",    
            /* Objeto de retorno: response */               
            success: function (response) {
                /* Incrustamos el objeto html response en el tbody de la tabla */
                $("#tabla-result").html(response);
            }

        });
    });

    /* Funciones varuas: */
    var funciones = {

        /* Calcula el total a pagar aplicando el descuento, tambien llena un campo oculto con el valor de total: totalEnviar */
        calcularPago: function () {
            let cantidad = $("#cantidad").val();
            let descuento = $("#descuento").val();
            let precio = $("#precio").val();
            let costo = precio * cantidad;
            let conDescuento = costo - (costo * descuento / 100);
            $("#total").text(conDescuento);
            $("#totalEnviar").attr("value", conDescuento);
        },
    }
});

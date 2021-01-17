$(document).ready(function(){
    $("#tipo").on('change', function(){
        let id = $("#tipo option:selected").val();
        
            $.get("core/producto/precio.php", { id }, function(data) {
                $("#precio").val(data);
                funciones.calcularPago();
            });
        
        
    });

    $("#cantidad").on("keyup keydown change",function(){
        funciones.calcularPago();
    });

    $("#descuento").on("change", function(){
        funciones.calcularPago();
    });
    $("#cancelar").attr("onclick", function (){
        $("#total").text('');
    });

    let cantidadLitros = 0;
    let totalVentas = 0;
    $('#tabla_ventas tbody').find('tr').each(function (i, el) {  
            cantidadLitros += parseFloat($(this).find('td').eq(3).text());
            totalVentas += parseFloat($(this).find('td').eq(5).text());        
        });

    $('#tabla_ventas tfoot tr th').eq(3).text("$" + cantidadLitros);
    $('#tabla_ventas tfoot tr th').eq(5).text("$" + totalVentas);
    

    var funciones = {
        calcularPago: function(){
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

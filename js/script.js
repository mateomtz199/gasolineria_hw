$(document).ready(function(){
    $("#tipo").on('change', function(){
        let tipo = $("#tipo option:selected").text();
        console.log(tipo);
        let precio = funciones.costoGasolina(tipo);
        $("#precio").val(precio);
        
        funciones.calcularPago();
    });

    $("#cantidad").on("keyup keydown change",function(){
        funciones.calcularPago();
    });

    $("#descuento").on("change", function(){
        funciones.calcularPago();
    });


    var funciones = {
        calcularPago: function(){
            let cantidad = $("#cantidad").val();
            let descuento = $("#descuento").val();
            let precio = $("#precio").val();
            let costo = precio * cantidad;
            let conDescuento = costo - (costo * descuento / 100);
            $("#total").text(conDescuento);
        },
        costoGasolina: function(tipo){
            if(tipo === 'Premium'){
                return 15.00;
            }else if(tipo === "Magna"){
                return 10.00;
            }else
                return 0.0;
        }
    }
});
$(document).ready(function(){
    $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
    $(".jCalendar").datepicker({"dateFormat": "dd/mm/yy"});
    $("#select_accion").dialog({
        autoOpen: false,
        title: "Seleccione una opción",
        modal: true
    });
    $("#ver_carrito").click(function(){
       $("#select_accion").dialog("open");
    });
})
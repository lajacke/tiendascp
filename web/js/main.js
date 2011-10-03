$(document).ready(function(){
    $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
    $(".jCalendar").datepicker({"dateFormat": "dd/mm/yy"});
})
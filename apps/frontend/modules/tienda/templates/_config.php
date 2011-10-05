<script type="text/javascript">
    $(document).ready(function(){
        $("form").submit(function(){
            if(confirm("¿Está seguro que desea realizar esta compra? \n Recuerde que al aceptar la compra, se esta generando un compromiso entre las partes")){
                return true;
            }else{
                return false;
            }
        });
    });


    function confirmar(columna,producto){
        var cantArticulos=$("#cant_articulos").html()
        if(confirm("¿Está seguro de eliminar este producto de su compra?")){
            $.ajax({
                url: "<?php echo $_SERVER["SCRIPT_NAME"] ?>/tienda/borrarcompra",
                data: {id: producto},
                success: function(data){
                    if(data=="true"){
                        cantArticulos--;
                        $("#cant_articulos").html(cantArticulos);
                        $("#producto"+columna).remove();
                    }
                }
            });
        }else{
            return false;
        }
    }
    function muestraPlanificacion(col){
        if($("#planificacion"+col).is(":visible")){
            $("#planificacion"+col).hide("slow");
        }else{
            $("#planificacion"+col).show("slow");
        }
    }
    
    function agregarPlanificacion(col,producto,registro,precio){
        var ano=$("#ano"+col).val();
        var mes=$("#mes"+col).val();
        var cant=$("#prod_cantidad"+col).val();
        var fila="";
        if(ano!=""){
            if(mes!=""){
                if(cant!=""){
                    var verificaVal= verificaValidacion(producto,ano,mes,val);
                    if(verificaVal==true){
                        val=val+producto+"-"+ano+"-"+mes+",";
                        $("#error"+col).text("");
                        fila="<tr id='fila"+registro+"'><td>"+ano+"</td><td>"+getNombreMes(mes)+"</td><td>"+cant+"</td><td><img src='../../../../images/borrar.png' onclick='borrar("+registro+")' alt='borrar' /><input type='hidden' name='planificacion["+producto+"]["+registro+"][ano]' value='"+ano+"' /><input type='hidden' name='planificacion["+producto+"]["+registro+"][mes]' value='"+mes+"' /><input type='hidden' name='planificacion["+producto+"]["+registro+"][cant]' value='"+cant+"' /></td></tr>"
                        $("#tbl_planificacion"+col).append(fila);
                        $("#ano"+col).val("");
                        $("#mes"+col).val("");
                        $("#prod_cantidad"+col).val("");
                        reg++;
                    }else{
                        $("#error"+col).text("Este mes ya fue planificado para este producto");
                        return false
                    }                    
                }else{
                    $("#error"+col).text("Debe especificar una cantidad");
                    return false;
                }
            }else{
                $("#error"+col).text("Debe especificar un mes");
                return false;
            }
        }else{
            $("#error"+col).text("Debe especificar un año");
            return false;
        }
        return false;
    }
    
    function borrar(registro){
        if(confirm("¿Está seguro de querer borrar esta planificación?")){
            $("#fila"+registro).remove();
            return true;
        }else{
            return false;
        }
    }
    
    function verificaValidacion(producto,ano,mes,val){
        var validacion =val.split(",")
        var cadenaValidacion=producto+"-"+ano+"-"+mes;
        for (var i = 0; i < validacion.length; i++){
            if(validacion[i]==cadenaValidacion){
                return false;
            }
        }
        return true;
    }
    
    function getNombreMes(idMes){
        switch(idMes){
            case '1':
                return "Enero"
                break;
            case '2':
                return "Febrero"
                break;
            case '3':
                return "Marzo"
                break;
            case '4':
                return "Abril"
                break;
            case '5':
                return "Mayo"
                break;
            case '6':
                return "Junio"
                break;
            case '7':
                return "Julio"
                break;
            case '8':
                return "Agosto"
                break;
            case '9':
                return "Septiembre"
                break;
            case '10':
                return "Octubre"
                break;
            case '11':
                return "Noviembre"
                break;
            case '12':
                return "Diciembre"
                break;
        }
    }
</script>
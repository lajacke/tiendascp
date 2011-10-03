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
</script>
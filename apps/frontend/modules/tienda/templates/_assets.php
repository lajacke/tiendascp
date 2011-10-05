<script type="text/javascript">
    $(document).ready(function(){
        $("a[rel^='gal1']").prettyPhoto();
        var options = {  
            zoomType: 'standard',  
            lens:true,  
            preloadImages: true,  
            alwaysOn:false,  
            zoomWidth: 300,  
            zoomHeight: 250,  
            xOffset:90,  
            yOffset:30,  
            position:'left'  
            //...MORE OPTIONS  
        };  
            
            
        $('.thumbs').jqzoom(options);
        var cantArticulos=$("#cant_articulos").html()
        $("#compra_cantidad").focus(function(){
            if($(this).val()=="1"){
                $(this).val("");
            }
        })
        $("#compra_cantidad").blur(function(){
            if($(this).val()==""){
                $(this).val("1");
            }
        })
        $("#comprar").click(function(){
            $.ajax({
                url: "<?php echo $_SERVER["SCRIPT_NAME"] ?>/tienda/comprar",
                data: {id: <?php echo $sf_request->getParameter("id") ?>, cantidad: $("#compra_cantidad").val()},
                success: function(data){
                    if(data=="true"){
                        cantArticulos++;
                        $("#cant_articulos").html(cantArticulos);
                        $("#comprar").remove();
                        $("#btn_comprar").html('<?php echo image_tag("comprado.jpg", array("id" => "comprado")) ?><br/>');
                    }
                }
            });
        });
    });
</script>
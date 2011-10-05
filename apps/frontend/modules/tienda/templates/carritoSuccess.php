<?php include_partial("config"); ?>
<?php 
    if($sf_request->getParameter("acc")=="comprar"){ 
        include_partial("comprar",array("productos"=>$productos));
    }else{
        include_partial("planificar",array("productos"=>$productos));
    }
?>
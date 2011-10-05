<form action="<?php echo url_for("tienda/generarPlanificacion") ?>" method="POST">
<?php
for ($i = 0; $i < count($productos); $i++):
    $detalleProduto = Doctrine_Core::getTable("TiendaCarrito")->getDatosProductoComprado($productos[$i]);
    for ($j = 0; $j < count($detalleProduto); $j++):
?>      
        <div id="producto<?php echo $i ?>" class="span-18 last">
            <div class="span-2">
                foto
            </div>
            <div class="span-16 last">
                <p>
                    <small><?php echo $detalleProduto[$j]["empresa"]; ?></small><br />
                    <strong><?php echo $detalleProduto[$j]["producto"] ?></strong> BsF. <label class="precio"><?php echo $detalleProduto[$j]["precio"] ?></label><br />
                    <?php include_partial("tienda/detalle_planificacion",array("col"=>$i,"producto"=>$productos[$i],"precio"=>$detalleProduto[$j]["precio"])); ?><br />
                    <small><a href="#" onclick="return confirmar(<?php echo $i ?>,<?php echo $detalleProduto[$j]["productos_id"] ?>)">Borrar</a></small><br />
                </p>
            </div>
        </div>
<?php endfor; ?>
<?php endfor; ?>
<div style="text-align: right" class="span-18"><input type="submit" value="Comprar" /></div>
</form>
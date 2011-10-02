<?php $itemsComprados= sfContext::getInstance()->getUser()->getAttribute("compras"); ?>
<?php if(sfContext::getInstance()->getActionName()=="show"): ?>
<div id="carrito">
    <strong>Cantidad: </strong><input type="text" name="compra[cantidad]" id="compra_cantidad" value="1" size="5" />
    <span id="btn_comprar">
    <?php if(in_array($sf_request->getParameter("id"),$itemsComprados)): ?>
        <?php echo image_tag("comprado.jpg",array("id"=>"comprado")) ?><br />
    <?php else: ?>
        <?php echo image_tag("comprar.jpg",array("id"=>"comprar")) ?><br />
    <?php endif; ?>
    </span>
    
    Usted tiene<label id="cant_articulos"><?php echo count(sfContext::getInstance()->getUser()->getAttribute("compras")) ?></label>Articulos en el carrito<br />
    <a href="<?php echo url_for("tienda/carrito") ?>">Ver carrito de compras</a>
</div>
<?php endif; ?>
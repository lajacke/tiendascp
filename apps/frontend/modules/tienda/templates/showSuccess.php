<?php include_partial("assets"); ?>
<div style="border: #000 solid thin" class="span-7">
    <a class="thumbs" href="../../../../../web/uploads/<?php echo $producto[0]['foto']; ?>" rel="gal1" title="<?php echo $producto[0]['nombre']; ?>">
        <img class="foto_principal" src="../../../../../web/uploads/<?php echo $producto[0]['foto']; ?>" width="256" height="256" alt="<?php echo $producto[0]['nombre']; ?>" />
    </a>
    <?php for ($i = 0; $i < count($producto); $i++) { ?>
    <a href="../../../../../web/uploads/<?php echo $producto[$i]['foto']; ?>" rel="gal1" title="<?php echo $producto[$i]['nombre']; ?>" rel="">
            <img id="thumb<?php echo $i ?>" src="../../../../../web/uploads/<?php echo $producto[$i]['foto']; ?>" width="48" height="48" alt="<?php echo $producto[$i]['nombre']; ?>" />
        </a>                
    <?php } ?>
</div>
<div style="border: #000 solid thin" class="span-10 last">
    <p>
    <h4 class="titulo"><?php echo $producto[0]['nombre']; ?></h4>
    <label>Precio: </label><span class="precio">BsF. <?php echo $producto[0]['precio_real']; ?></span><br />
    <label>Especificaciones: </label><?php echo $producto[0]['especificaciones']; ?><br />
    <label>Denominación: </label><?php echo $producto[0]['denominacion']; ?><br />
    <label>Presentación: </label><?php echo $producto[0]['presentacion']; ?><br />
    <small><?php echo $producto[0]['empresas_id']; ?></small>  
</p>
</div>
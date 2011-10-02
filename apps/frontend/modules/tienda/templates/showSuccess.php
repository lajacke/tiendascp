<?php include_partial("assets"); ?>
<div style="border: #000 solid thin" class="span-7">Aqui va la foto grande</div>
<div style="border: #000 solid thin" class="span-10 last">
    <p>
        <small><?php echo $producto[0]['empresas_id']; ?></small>
        <h4><?php echo $producto[0]['nombre']; ?></h4>
        <label>Especificaciones: </label><?php echo $producto[0]['especificaciones']; ?><br />
        <label>Denominación: </label><?php echo $producto[0]['denominacion']; ?><br />
        <label>Presentación: </label><?php echo $producto[0]['presentacion']; ?><br />
        <label>Precio: </label><span class="precio">BsF. <?php echo $producto[0]['precio_real']; ?></span><br />
    </p>
</div>
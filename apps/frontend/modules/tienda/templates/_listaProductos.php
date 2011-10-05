<?php foreach ($productos as $producto): ?>
    <tr>
        <td><?php echo image_tag("../uploads/".$producto['foto'],array("class"=>"thumb")); ?></td>
        <td>
            <?php echo link_to($producto->getNombre(), "tienda/show?id=" . $producto->getId()) ?><br />
            <label>Presentación: </label><?php echo $producto->getPresentacion() ?><br />
            <label>Precio: </label><?php echo $producto->getPrecioReal() ?><br />
        </td>                           
    </tr>
<?php endforeach; ?>
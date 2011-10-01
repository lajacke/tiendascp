<?php foreach ($productos as $producto): ?>
    <tr>
        <td>Foto</td>
        <td>
            <?php echo link_to($producto->getNombre(), "tienda/show?id=" . $producto->getId()) ?><br />
            <label>Presentación: </label><?php echo $producto->getPresentacion() ?><br />
            <label>Precio: </label><?php echo $producto->getPrecioReal() ?><br />
        </td>                           
    </tr>
<?php endforeach; ?>
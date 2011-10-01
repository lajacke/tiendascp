<div class="sf_admin_list">
    <table cellspacing="0" width="100%">
        <tbody>
            <?php include_partial("tienda/listaProductos", array("productos" => $pager->getResults())) ?>
        </tbody>
    </table>
    <?php if ($pager->haveToPaginate()): ?>
        <div class="pagination">
            <a href="<?php echo url_for('tienda/buscar?busqueda='.$buscando) ?>?page=1">
                <img src="/images/first.png" alt="Inicio" title="Inicio" />
            </a>
            <a href="<?php echo url_for('tienda/buscar?busqueda='.$buscando) ?>?page=<?php echo $pager->getPreviousPage() ?>">
                <img src="/images/previous.png" alt="Página anterior" title="Página anterior" />
            </a>
            <?php foreach ($pager->getLinks() as $page): ?>
                <?php if ($page == $pager->getPage()): ?>
                    <?php echo $page ?>
                <?php else: ?>
                    <a href="<?php echo url_for('tienda/buscar?busqueda='.$buscando) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
            <a href="<?php echo url_for('tienda/buscar') ?>?page=<?php echo $pager->getNextPage() ?>&?busqueda='.$buscando">
                <img src="/images/next.png" alt="Página siguiente" title="Página siguiente" />
            </a>
            <a href="<?php echo url_for('tienda/buscar?busqueda='.$buscando) ?>?page=<?php echo $pager->getLastPage() ?>">
                <img src="/images/last.png" alt="Fin" title="Fin" />
            </a>
        </div>
    <?php endif; ?>
</div>
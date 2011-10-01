<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div class="container">
          <div class="span-24 last" id="cabecera">Header</div>
          <div class="span-24 last" id="buscador">
              <form id="buscador" action="<?php echo url_for('tienda/buscar') ?>" method="GET">
                  <input type="text" name="busqueda" id="busqueda" />
                  <input type="submit" value="Buscar" />
              </form>
          </div>
          <div class="span-18" id="cuerpo"><?php echo $sf_content ?></div>
          <div class="span-6 last" id="carrito">Carrito</div>
          <div class="span-24 last" id="pie">Pie</div>
      </div>  
  </body>
</html>

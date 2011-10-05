<script>
var reg=0;
var val="";
</script>
<select id="ano<?php echo $col ?>">
    <option value="">Seleccione</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
</select>
<select id="mes<?php echo $col ?>">
    <option value="">Seleccione</option>
    <option value="1">Enero</option>
    <option value="2">Febrero</option>
    <option value="3">Marzo</option>
    <option value="4">Abril</option>
    <option value="5">Mayo</option>
    <option value="6">Junio</option>
    <option value="7">Julio</option>
    <option value="8">Agosto</option>
    <option value="9">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
</select>
<strong>Cantidad: </strong><input type="text" id="prod_cantidad<?php echo $col ?>" class="prod_cantidad" />
<input onclick="agregarPlanificacion(<?php echo $col ?>,<?php echo $producto ?>,reg,<?php echo $precio ?>)" type="button" value="Agregar" /><label style="border: none; margin: 0px; padding: 0px;" id="error<?php echo $col ?>" class="error"></label>
<table id="tbl_planificacion<?php echo $col ?>"></table>
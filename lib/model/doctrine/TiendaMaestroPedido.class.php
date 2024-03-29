<?php

/**
 * TiendaMaestroPedido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TiendaMaestroPedido extends BaseTiendaMaestroPedido {

    public static function getTotal($datosProductos,$cantidades) {
        $total = 0;
        for ($i = 0; $i < count($datosProductos); $i++) {
            $total = $total + ($datosProductos[$i]["precio_real"]*$cantidades[$i]);
        }
        return $total;
    }
    public function guardaMaestro($total){
        $this->setEmpresasId(5);
        $this->setTotalPedido($total);
        $this->setFechaPedido("now()");
        $this->save();
    }

}

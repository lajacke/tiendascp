<?php

/**
 * TiendaMaestroPlanificacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TiendaMaestroPlanificacion extends BaseTiendaMaestroPlanificacion {
    public function guardaMaestro($total){
        $this->setEmpresasId(5);
        $this->setTotalPlanificacion($total);
        $this->setFechaPlanificacion("now()");
        $this->save();
    }
}

<?php

/**
 * tienda actions.
 *
 * @package    tienda_scp
 * @subpackage tienda
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tiendaActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->productos = Doctrine::getTable('Productos')->getPortada();
    }

    public function executeBuscar(sfWebRequest $request) {
        $buscando = $request->getParameter('busqueda');
        $this->pager = new sfDoctrinePager('Productos', 10);
        $this->pager->setQuery(Doctrine::getTable('Productos')->getBusqueda($buscando));
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->buscando=$buscando;
    }
    public function executeShow(sfWebRequest $request){
        $this->producto=Doctrine_Core::getTable("Productos")->findBy("id", $request->getParameter("id"));
    }

}

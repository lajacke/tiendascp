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
        $this->buscando = $buscando;
    }

    public function executeShow(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $this->producto = Doctrine::getTable('Productos')->getShow($id);
    }

    public function executeComprar(sfWebRequest $request) {
        $compra = new TiendaCarrito();
        $compra->setUsuarioId(1);
        $compra->setProductosId($request->getParameter("id"));
        $compra->setCantidad($request->getParameter("cantidad"));
        $compra->setFecha("now()");
        $compra->setActivo("true");
        $compra->save();
        Usuario::setSessionVars();
        echo 'true';
        die();
    }

    public function executeCarrito(sfWebRequest $request) {
        $compras = sfContext::getInstance()->getUser()->getAttribute("compras");
        $this->productos = $compras;
    }

    public function executeBorrarcompra(sfWebRequest $request) {
        TiendaCarrito::borrarCompra($request->getParameter("id"));
        $compras = sfContext::getInstance()->getUser()->getAttribute("compras");
        $key = array_search($request->getParameter("id"), $compras);
        unset($compras[$key]);
        $compras = array_values($compras);
        sfContext::getInstance()->getUser()->getAttribute("compras");
        echo "true";
        die();
    }

    public function executeGenerarOrden(sfWebRequest $request) {
        $dataForm = $this->getDataForm($request);
        $idProductos = sfContext::getInstance()->getUser()->getAttribute("compras");
        $datosProductos = array();
        for ($i = 0; $i < count($idProductos); $i++) {
            $producto = Doctrine_Core::getTable("Productos")->findOneBy("id", $idProductos[$i]);
            $datosProductos[$i] = $producto;
        }

        $total = TiendaMaestroPedido::getTotal($datosProductos,$dataForm["cantidad"]);

        $maestroTienda = new TiendaMaestroPedido();
        $maestroTienda->guardaMaestro($datosProductos, $total);
        $idMaestro = $maestroTienda->getId();

        for ($i = 0; $i < count($datosProductos); $i++) {
            $detallePedido = new TiendaDetallePedido();
            $detallePedido->setProductosId($datosProductos[$i]["id"]);
            $detallePedido->setCantidad($dataForm["cantidad"][$i]);
            $detallePedido->setFechaEntrega($dataForm["fecha"][$i]);
            $detallePedido->setTiendaMaestroPedidoId($idMaestro);
            $detallePedido->save();
        }

        TiendaCarrito::unsetCarrito($datosProductos,1);
        /*AQUI VA LA PARTE DE LOS CORREOS*/
        $this->redirect("tienda/index");
    }

    private function getDataForm(sfWebRequest $request) {
        $cantidades = $request["cantidad"];
        $fechas=$request["fecha_entrega"];
        $i=0;
        foreach($cantidades as $cantidad=>$valor){
            $datosForm["cantidad"][$i]=$valor;
            $i++;
        }
        $i=0;
        foreach($fechas as $fecha=>$valor){
            $fecha=explode("/",$valor);
            $fecha=$fecha[2]."-".$fecha[1]."-".$fecha[0];
            $datosForm["fecha"][$i]=$fecha;
            $i++;
        }
        return $datosForm;
    }

}

<?php

/**
 * TiendaCarritoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TiendaCarritoTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object TiendaCarritoTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('TiendaCarrito');
    }

    public function getComprasUsuario($usuario) {
        $query = Doctrine_Query::create()
                        ->select("productos_id")
                        ->from("TiendaCarrito")
                        ->where("usuario_id=?", $usuario)
                        ->andWhere("activo=?", true)
                        ->execute();
        return $query;
    }

    public function getDatosProductoComprado($producto) {
        $query = Doctrine_Query::create()
                        ->select("prod.nombre as producto, prod.especificaciones, prod.precio_real as precio, emp.nombre_empresa as empresa, tc.cantidad, tc.productos_id")
                        ->from("TiendaCarrito tc")
                        ->innerJoin("tc.Productos prod")
                        ->innerJoin("prod.Empresas emp")
                        ->where("tc.productos_id=?", $producto)
                        ->andWhere("tc.activo=?",true)
                        ->execute();
        return $query;
    }

}
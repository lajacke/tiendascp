<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TiendaMaestroPedido', 'doctrine');

/**
 * BaseTiendaMaestroPedido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresas_id
 * @property float $total_pedido
 * @property timestamp $fecha_pedido
 * @property Empresas $Empresas
 * @property Doctrine_Collection $TiendaDetallePedido
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method integer             getEmpresasId()          Returns the current record's "empresas_id" value
 * @method float               getTotalPedido()         Returns the current record's "total_pedido" value
 * @method timestamp           getFechaPedido()         Returns the current record's "fecha_pedido" value
 * @method Empresas            getEmpresas()            Returns the current record's "Empresas" value
 * @method Doctrine_Collection getTiendaDetallePedido() Returns the current record's "TiendaDetallePedido" collection
 * @method TiendaMaestroPedido setId()                  Sets the current record's "id" value
 * @method TiendaMaestroPedido setEmpresasId()          Sets the current record's "empresas_id" value
 * @method TiendaMaestroPedido setTotalPedido()         Sets the current record's "total_pedido" value
 * @method TiendaMaestroPedido setFechaPedido()         Sets the current record's "fecha_pedido" value
 * @method TiendaMaestroPedido setEmpresas()            Sets the current record's "Empresas" value
 * @method TiendaMaestroPedido setTiendaDetallePedido() Sets the current record's "TiendaDetallePedido" collection
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTiendaMaestroPedido extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tienda_maestro_pedido');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'tienda_maestro_pedido_id',
             'length' => 4,
             ));
        $this->hasColumn('empresas_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('total_pedido', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('fecha_pedido', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Empresas', array(
             'local' => 'empresas_id',
             'foreign' => 'id'));

        $this->hasMany('TiendaDetallePedido', array(
             'local' => 'id',
             'foreign' => 'tienda_maestro_pedido_id'));
    }
}
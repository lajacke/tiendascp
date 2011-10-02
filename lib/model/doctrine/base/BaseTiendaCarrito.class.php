<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TiendaCarrito', 'doctrine');

/**
 * BaseTiendaCarrito
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $usuario_id
 * @property integer $producto_id
 * @property integer $cantidad
 * @property timestamp $fecha
 * @property boolean $activo
 * @property Productos $Productos
 * @property Usuario $Usuario
 * 
 * @method integer       getId()          Returns the current record's "id" value
 * @method integer       getUsuarioId()   Returns the current record's "usuario_id" value
 * @method integer       getProductoId()  Returns the current record's "producto_id" value
 * @method integer       getCantidad()    Returns the current record's "cantidad" value
 * @method timestamp     getFecha()       Returns the current record's "fecha" value
 * @method boolean       getActivo()      Returns the current record's "activo" value
 * @method Productos     getProductos()   Returns the current record's "Productos" value
 * @method Usuario       getUsuario()     Returns the current record's "Usuario" value
 * @method TiendaCarrito setId()          Sets the current record's "id" value
 * @method TiendaCarrito setUsuarioId()   Sets the current record's "usuario_id" value
 * @method TiendaCarrito setProductoId()  Sets the current record's "producto_id" value
 * @method TiendaCarrito setCantidad()    Sets the current record's "cantidad" value
 * @method TiendaCarrito setFecha()       Sets the current record's "fecha" value
 * @method TiendaCarrito setActivo()      Sets the current record's "activo" value
 * @method TiendaCarrito setProductos()   Sets the current record's "Productos" value
 * @method TiendaCarrito setUsuario()     Sets the current record's "Usuario" value
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTiendaCarrito extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tienda_carrito');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'tienda_carrito_id',
             'length' => 4,
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('producto_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cantidad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('activo', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Productos', array(
             'local' => 'producto_id',
             'foreign' => 'id'));

        $this->hasOne('Usuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}
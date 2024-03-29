<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Foto', 'doctrine');

/**
 * BaseFoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $productos_id
 * @property Productos $Productos
 * 
 * @method integer   getId()           Returns the current record's "id" value
 * @method string    getNombre()       Returns the current record's "nombre" value
 * @method integer   getProductosId()  Returns the current record's "productos_id" value
 * @method Productos getProductos()    Returns the current record's "Productos" value
 * @method Foto      setId()           Sets the current record's "id" value
 * @method Foto      setNombre()       Sets the current record's "nombre" value
 * @method Foto      setProductosId()  Sets the current record's "productos_id" value
 * @method Foto      setProductos()    Sets the current record's "Productos" value
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFoto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('foto');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'foto_id',
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('productos_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Productos', array(
             'local' => 'productos_id',
             'foreign' => 'id'));
    }
}
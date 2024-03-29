<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ejes', 'doctrine');

/**
 * BaseEjes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $Empresas
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method string              getNombre()   Returns the current record's "nombre" value
 * @method Doctrine_Collection getEmpresas() Returns the current record's "Empresas" collection
 * @method Ejes                setId()       Sets the current record's "id" value
 * @method Ejes                setNombre()   Sets the current record's "nombre" value
 * @method Ejes                setEmpresas() Sets the current record's "Empresas" collection
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEjes extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ejes');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'ejes_id',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Empresas', array(
             'local' => 'id',
             'foreign' => 'ejes_id'));
    }
}
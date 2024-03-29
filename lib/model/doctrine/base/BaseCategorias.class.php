<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Categorias', 'doctrine');

/**
 * BaseCategorias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $empresas_id
 * @property Empresas $Empresas
 * 
 * @method integer    getId()          Returns the current record's "id" value
 * @method string     getNombre()      Returns the current record's "nombre" value
 * @method integer    getEmpresasId()  Returns the current record's "empresas_id" value
 * @method Empresas   getEmpresas()    Returns the current record's "Empresas" value
 * @method Categorias setId()          Sets the current record's "id" value
 * @method Categorias setNombre()      Sets the current record's "nombre" value
 * @method Categorias setEmpresasId()  Sets the current record's "empresas_id" value
 * @method Categorias setEmpresas()    Sets the current record's "Empresas" value
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategorias extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categorias');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'categorias_id',
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
        $this->hasColumn('empresas_id', 'integer', 4, array(
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
        $this->hasOne('Empresas', array(
             'local' => 'empresas_id',
             'foreign' => 'id'));
    }
}
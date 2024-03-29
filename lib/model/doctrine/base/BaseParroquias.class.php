<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Parroquias', 'doctrine');

/**
 * BaseParroquias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $nombre
 * @property string $municipios_id
 * @property Municipios $Municipios
 * @property Doctrine_Collection $Empresas
 * 
 * @method string              getId()            Returns the current record's "id" value
 * @method string              getNombre()        Returns the current record's "nombre" value
 * @method string              getMunicipiosId()  Returns the current record's "municipios_id" value
 * @method Municipios          getMunicipios()    Returns the current record's "Municipios" value
 * @method Doctrine_Collection getEmpresas()      Returns the current record's "Empresas" collection
 * @method Parroquias          setId()            Sets the current record's "id" value
 * @method Parroquias          setNombre()        Sets the current record's "nombre" value
 * @method Parroquias          setMunicipiosId()  Sets the current record's "municipios_id" value
 * @method Parroquias          setMunicipios()    Sets the current record's "Municipios" value
 * @method Parroquias          setEmpresas()      Sets the current record's "Empresas" collection
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParroquias extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('parroquias');
        $this->hasColumn('id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => '',
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('municipios_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Municipios', array(
             'local' => 'municipios_id',
             'foreign' => 'id'));

        $this->hasMany('Empresas', array(
             'local' => 'id',
             'foreign' => 'parroquias_id'));
    }
}
<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Productos', 'doctrine');

/**
 * BaseProductos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $denominacion
 * @property string $especificaciones
 * @property string $presentacion
 * @property float $precio_real
 * @property integer $empresas_id
 * @property integer $cantidad_inicial
 * @property integer $categorias_id
 * @property Empresas $Empresas
 * @property Doctrine_Collection $Almacenes
 * @property Doctrine_Collection $PlanificacionDetalles
 * @property Doctrine_Collection $PlanificacionMaestros
 * @property Doctrine_Collection $TiendaDetallePedido
 * @property Doctrine_Collection $VentasMaestro
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getNombre()                Returns the current record's "nombre" value
 * @method string              getDenominacion()          Returns the current record's "denominacion" value
 * @method string              getEspecificaciones()      Returns the current record's "especificaciones" value
 * @method string              getPresentacion()          Returns the current record's "presentacion" value
 * @method float               getPrecioReal()            Returns the current record's "precio_real" value
 * @method integer             getEmpresasId()            Returns the current record's "empresas_id" value
 * @method integer             getCantidadInicial()       Returns the current record's "cantidad_inicial" value
 * @method integer             getCategoriasId()          Returns the current record's "categorias_id" value
 * @method Empresas            getEmpresas()              Returns the current record's "Empresas" value
 * @method Doctrine_Collection getAlmacenes()             Returns the current record's "Almacenes" collection
 * @method Doctrine_Collection getPlanificacionDetalles() Returns the current record's "PlanificacionDetalles" collection
 * @method Doctrine_Collection getPlanificacionMaestros() Returns the current record's "PlanificacionMaestros" collection
 * @method Doctrine_Collection getTiendaDetallePedido()   Returns the current record's "TiendaDetallePedido" collection
 * @method Doctrine_Collection getVentasMaestro()         Returns the current record's "VentasMaestro" collection
 * @method Productos           setId()                    Sets the current record's "id" value
 * @method Productos           setNombre()                Sets the current record's "nombre" value
 * @method Productos           setDenominacion()          Sets the current record's "denominacion" value
 * @method Productos           setEspecificaciones()      Sets the current record's "especificaciones" value
 * @method Productos           setPresentacion()          Sets the current record's "presentacion" value
 * @method Productos           setPrecioReal()            Sets the current record's "precio_real" value
 * @method Productos           setEmpresasId()            Sets the current record's "empresas_id" value
 * @method Productos           setCantidadInicial()       Sets the current record's "cantidad_inicial" value
 * @method Productos           setCategoriasId()          Sets the current record's "categorias_id" value
 * @method Productos           setEmpresas()              Sets the current record's "Empresas" value
 * @method Productos           setAlmacenes()             Sets the current record's "Almacenes" collection
 * @method Productos           setPlanificacionDetalles() Sets the current record's "PlanificacionDetalles" collection
 * @method Productos           setPlanificacionMaestros() Sets the current record's "PlanificacionMaestros" collection
 * @method Productos           setTiendaDetallePedido()   Sets the current record's "TiendaDetallePedido" collection
 * @method Productos           setVentasMaestro()         Sets the current record's "VentasMaestro" collection
 * 
 * @package    tienda_scp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('productos');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'productos_id',
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
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('especificaciones', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('presentacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('precio_real', 'float', null, array(
             'type' => 'float',
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
        $this->hasColumn('cantidad_inicial', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('categorias_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
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

        $this->hasMany('Almacenes', array(
             'local' => 'id',
             'foreign' => 'productos_id'));

        $this->hasMany('PlanificacionDetalles', array(
             'local' => 'id',
             'foreign' => 'productos_id'));

        $this->hasMany('PlanificacionMaestros', array(
             'local' => 'id',
             'foreign' => 'productos_id'));

        $this->hasMany('TiendaDetallePedido', array(
             'local' => 'id',
             'foreign' => 'productos_id'));

        $this->hasMany('VentasMaestro', array(
             'local' => 'id',
             'foreign' => 'productos_id'));
    }
}
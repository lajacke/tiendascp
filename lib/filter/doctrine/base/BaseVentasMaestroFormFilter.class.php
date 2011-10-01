<?php

/**
 * VentasMaestro filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVentasMaestroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'clientes_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => true)),
      'fecha_entrega'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'productos_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
      'empresas_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => true)),
      'productos_cantidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_venta'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'clientes_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clientes'), 'column' => 'id')),
      'fecha_entrega'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'productos_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Productos'), 'column' => 'id')),
      'empresas_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresas'), 'column' => 'id')),
      'productos_cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_venta'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ventas_maestro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentasMaestro';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'clientes_id'        => 'ForeignKey',
      'fecha_entrega'      => 'Date',
      'productos_id'       => 'ForeignKey',
      'empresas_id'        => 'ForeignKey',
      'productos_cantidad' => 'Number',
      'total_venta'        => 'Number',
    );
  }
}

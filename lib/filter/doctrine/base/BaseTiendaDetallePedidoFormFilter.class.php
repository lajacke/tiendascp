<?php

/**
 * TiendaDetallePedido filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTiendaDetallePedidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'productos_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
      'cantidad'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_entrega'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tienda_maestro_pedido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TiendaMaestroPedido'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'productos_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Productos'), 'column' => 'id')),
      'cantidad'                 => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha_entrega'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tienda_maestro_pedido_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TiendaMaestroPedido'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('tienda_detalle_pedido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaDetallePedido';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'productos_id'             => 'ForeignKey',
      'cantidad'                 => 'Number',
      'fecha_entrega'            => 'Date',
      'tienda_maestro_pedido_id' => 'ForeignKey',
    );
  }
}

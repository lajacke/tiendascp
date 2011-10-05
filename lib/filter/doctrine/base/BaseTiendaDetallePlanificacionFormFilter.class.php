<?php

/**
 * TiendaDetallePlanificacion filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTiendaDetallePlanificacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'productos_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
      'cantidad'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tienda_maestro_planificacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TiendaMaestroPlanificacion'), 'add_empty' => true)),
      'mes'                             => new sfWidgetFormFilterInput(),
      'ano'                             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'productos_id'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Productos'), 'column' => 'id')),
      'cantidad'                        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tienda_maestro_planificacion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TiendaMaestroPlanificacion'), 'column' => 'id')),
      'mes'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ano'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tienda_detalle_planificacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaDetallePlanificacion';
  }

  public function getFields()
  {
    return array(
      'productos_id'                    => 'ForeignKey',
      'cantidad'                        => 'Number',
      'tienda_maestro_planificacion_id' => 'ForeignKey',
      'id'                              => 'Number',
      'mes'                             => 'Number',
      'ano'                             => 'Number',
    );
  }
}

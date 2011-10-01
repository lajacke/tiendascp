<?php

/**
 * PlanificacionDetalles filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlanificacionDetallesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'planificacion_maestros_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PlanificacionMaestros'), 'add_empty' => true)),
      'productos_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
      'cantidad'                  => new sfWidgetFormFilterInput(),
      'cantidad_produccion'       => new sfWidgetFormFilterInput(),
      'dia'                       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'planificacion_maestros_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PlanificacionMaestros'), 'column' => 'id')),
      'productos_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Productos'), 'column' => 'id')),
      'cantidad'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantidad_produccion'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dia'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('planificacion_detalles_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlanificacionDetalles';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'planificacion_maestros_id' => 'ForeignKey',
      'productos_id'              => 'ForeignKey',
      'cantidad'                  => 'Number',
      'cantidad_produccion'       => 'Number',
      'dia'                       => 'Number',
    );
  }
}

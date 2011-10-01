<?php

/**
 * PlanificacionDetalles form base class.
 *
 * @method PlanificacionDetalles getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlanificacionDetallesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'planificacion_maestros_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PlanificacionMaestros'), 'add_empty' => false)),
      'productos_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
      'cantidad'                  => new sfWidgetFormInputText(),
      'cantidad_produccion'       => new sfWidgetFormInputText(),
      'dia'                       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'planificacion_maestros_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PlanificacionMaestros'))),
      'productos_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'required' => false)),
      'cantidad'                  => new sfValidatorInteger(array('required' => false)),
      'cantidad_produccion'       => new sfValidatorInteger(array('required' => false)),
      'dia'                       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('planificacion_detalles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlanificacionDetalles';
  }

}

<?php

/**
 * PlanificacionMaestros form base class.
 *
 * @method PlanificacionMaestros getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlanificacionMaestrosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'empresas_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => false)),
      'mes'          => new sfWidgetFormTextarea(),
      'productos_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresas_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'))),
      'mes'          => new sfValidatorString(array('required' => false)),
      'productos_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('planificacion_maestros[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlanificacionMaestros';
  }

}

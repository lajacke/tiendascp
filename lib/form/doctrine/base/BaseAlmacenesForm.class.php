<?php

/**
 * Almacenes form base class.
 *
 * @method Almacenes getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlmacenesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormTextarea(),
      'productos_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => false)),
      'cantidad'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'       => new sfValidatorString(),
      'productos_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'))),
      'cantidad'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('almacenes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Almacenes';
  }

}

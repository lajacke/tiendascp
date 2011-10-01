<?php

/**
 * Municipios form base class.
 *
 * @method Municipios getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMunicipiosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormTextarea(),
      'estados_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estados'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'     => new sfValidatorString(),
      'estados_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estados'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('municipios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Municipios';
  }

}

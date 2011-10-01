<?php

/**
 * Ambitos form base class.
 *
 * @method Ambitos getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbitosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                         => new sfWidgetFormInputHidden(),
      'nombre'                                     => new sfWidgetFormTextarea(),
      'coordenada_longitud'                        => new sfWidgetFormTextarea(),
      'coordenada_latitud'                         => new sfWidgetFormTextarea(),
      'tipo_de_ambito_industrial'                  => new sfWidgetFormTextarea(),
      'vias_de_acceso_a_la_fabrica_en_buen_estado' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'                                     => new sfValidatorString(),
      'coordenada_longitud'                        => new sfValidatorString(),
      'coordenada_latitud'                         => new sfValidatorString(),
      'tipo_de_ambito_industrial'                  => new sfValidatorString(),
      'vias_de_acceso_a_la_fabrica_en_buen_estado' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('ambitos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambitos';
  }

}

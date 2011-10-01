<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'             => new sfWidgetFormInputText(),
      'nombre'         => new sfWidgetFormTextarea(),
      'apellido'       => new sfWidgetFormTextarea(),
      'ulogin'         => new sfWidgetFormTextarea(),
      'upassword'      => new sfWidgetFormTextarea(),
      'acceso'         => new sfWidgetFormDateTime(),
      'estatus'        => new sfWidgetFormInputText(),
      'pass_exp'       => new sfWidgetFormDateTime(),
      'semilla'        => new sfWidgetFormTextarea(),
      'id'             => new sfWidgetFormInputHidden(),
      'empresas_id'    => new sfWidgetFormInputText(),
      'nombre_empresa' => new sfWidgetFormTextarea(),
      'correo'         => new sfWidgetFormTextarea(),
      'telefono'       => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'ci'             => new sfValidatorNumber(),
      'nombre'         => new sfValidatorString(array('required' => false)),
      'apellido'       => new sfValidatorString(array('required' => false)),
      'ulogin'         => new sfValidatorString(array('required' => false)),
      'upassword'      => new sfValidatorString(array('required' => false)),
      'acceso'         => new sfValidatorDateTime(array('required' => false)),
      'estatus'        => new sfValidatorNumber(array('required' => false)),
      'pass_exp'       => new sfValidatorDateTime(array('required' => false)),
      'semilla'        => new sfValidatorString(array('required' => false)),
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresas_id'    => new sfValidatorInteger(array('required' => false)),
      'nombre_empresa' => new sfValidatorString(array('required' => false)),
      'correo'         => new sfValidatorString(array('required' => false)),
      'telefono'       => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}

<?php

/**
 * TiendaCarrito form base class.
 *
 * @method TiendaCarrito getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiendaCarritoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'usuario_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'cantidad'     => new sfWidgetFormInputText(),
      'fecha'        => new sfWidgetFormDateTime(),
      'activo'       => new sfWidgetFormInputCheckbox(),
      'productos_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'required' => false)),
      'cantidad'     => new sfValidatorInteger(array('required' => false)),
      'fecha'        => new sfValidatorDateTime(array('required' => false)),
      'activo'       => new sfValidatorBoolean(array('required' => false)),
      'productos_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tienda_carrito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaCarrito';
  }

}

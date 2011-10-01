<?php

/**
 * Productos form base class.
 *
 * @method Productos getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormTextarea(),
      'denominacion'     => new sfWidgetFormTextarea(),
      'especificaciones' => new sfWidgetFormTextarea(),
      'presentacion'     => new sfWidgetFormTextarea(),
      'precio_real'      => new sfWidgetFormInputText(),
      'empresas_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => false)),
      'cantidad_inicial' => new sfWidgetFormInputText(),
      'categorias_id'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'           => new sfValidatorString(),
      'denominacion'     => new sfValidatorString(),
      'especificaciones' => new sfValidatorString(),
      'presentacion'     => new sfValidatorString(),
      'precio_real'      => new sfValidatorNumber(),
      'empresas_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'))),
      'cantidad_inicial' => new sfValidatorInteger(array('required' => false)),
      'categorias_id'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('productos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Productos';
  }

}

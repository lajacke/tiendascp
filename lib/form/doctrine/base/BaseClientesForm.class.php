<?php

/**
 * Clientes form base class.
 *
 * @method Clientes getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClientesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormTextarea(),
      'tipo_clientes_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoClientes'), 'add_empty' => false)),
      'cliente_rif'      => new sfWidgetFormTextarea(),
      'empresas_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'           => new sfValidatorString(),
      'tipo_clientes_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoClientes'))),
      'cliente_rif'      => new sfValidatorString(),
      'empresas_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'))),
    ));

    $this->widgetSchema->setNameFormat('clientes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientes';
  }

}

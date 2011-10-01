<?php

/**
 * TiendaMaestroPedido form base class.
 *
 * @method TiendaMaestroPedido getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiendaMaestroPedidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'empresas_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => false)),
      'total_pedido' => new sfWidgetFormInputText(),
      'fecha_pedido' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresas_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'))),
      'total_pedido' => new sfValidatorNumber(),
      'fecha_pedido' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tienda_maestro_pedido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaMaestroPedido';
  }

}

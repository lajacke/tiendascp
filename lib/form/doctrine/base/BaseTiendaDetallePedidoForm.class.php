<?php

/**
 * TiendaDetallePedido form base class.
 *
 * @method TiendaDetallePedido getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiendaDetallePedidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputText(),
      'productos_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => false)),
      'cantidad'                 => new sfWidgetFormInputText(),
      'fecha_entrega'            => new sfWidgetFormDate(),
      'tienda_maestro_pedido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TiendaMaestroPedido'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorInteger(),
      'productos_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'))),
      'cantidad'                 => new sfValidatorNumber(),
      'fecha_entrega'            => new sfValidatorDate(),
      'tienda_maestro_pedido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TiendaMaestroPedido'))),
    ));

    $this->widgetSchema->setNameFormat('tienda_detalle_pedido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaDetallePedido';
  }

}

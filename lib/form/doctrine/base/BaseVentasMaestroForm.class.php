<?php

/**
 * VentasMaestro form base class.
 *
 * @method VentasMaestro getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVentasMaestroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'clientes_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
      'fecha_entrega'      => new sfWidgetFormDateTime(),
      'productos_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => false)),
      'empresas_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => false)),
      'productos_cantidad' => new sfWidgetFormInputText(),
      'total_venta'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'clientes_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'))),
      'fecha_entrega'      => new sfValidatorDateTime(),
      'productos_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'))),
      'empresas_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'))),
      'productos_cantidad' => new sfValidatorInteger(),
      'total_venta'        => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('ventas_maestro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentasMaestro';
  }

}

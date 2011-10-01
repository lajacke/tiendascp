<?php

/**
 * Devoluciones form base class.
 *
 * @method Devoluciones getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDevolucionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'ventas_maestro_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentasMaestro'), 'add_empty' => false)),
      'empresas_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => false)),
      'cant_devuelta'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ventas_maestro_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VentasMaestro'))),
      'empresas_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'))),
      'cant_devuelta'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('devoluciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Devoluciones';
  }

}

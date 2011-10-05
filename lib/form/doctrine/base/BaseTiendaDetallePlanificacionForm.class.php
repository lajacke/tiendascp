<?php

/**
 * TiendaDetallePlanificacion form base class.
 *
 * @method TiendaDetallePlanificacion getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiendaDetallePlanificacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'productos_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => false)),
      'cantidad'                        => new sfWidgetFormInputText(),
      'tienda_maestro_planificacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TiendaMaestroPlanificacion'), 'add_empty' => false)),
      'id'                              => new sfWidgetFormInputHidden(),
      'mes'                             => new sfWidgetFormInputText(),
      'ano'                             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'productos_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'))),
      'cantidad'                        => new sfValidatorNumber(),
      'tienda_maestro_planificacion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TiendaMaestroPlanificacion'))),
      'id'                              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'mes'                             => new sfValidatorInteger(array('required' => false)),
      'ano'                             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tienda_detalle_planificacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaDetallePlanificacion';
  }

}

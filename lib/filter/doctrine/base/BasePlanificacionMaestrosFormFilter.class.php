<?php

/**
 * PlanificacionMaestros filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlanificacionMaestrosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresas_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => true)),
      'mes'          => new sfWidgetFormFilterInput(),
      'productos_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productos'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'empresas_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresas'), 'column' => 'id')),
      'mes'          => new sfValidatorPass(array('required' => false)),
      'productos_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Productos'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('planificacion_maestros_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlanificacionMaestros';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'empresas_id'  => 'ForeignKey',
      'mes'          => 'Text',
      'productos_id' => 'ForeignKey',
    );
  }
}

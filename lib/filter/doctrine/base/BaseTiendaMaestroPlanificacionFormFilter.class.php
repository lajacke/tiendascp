<?php

/**
 * TiendaMaestroPlanificacion filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTiendaMaestroPlanificacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresas_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => true)),
      'total_planificacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_planificacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'empresas_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresas'), 'column' => 'id')),
      'total_planificacion' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha_planificacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tienda_maestro_planificacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiendaMaestroPlanificacion';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'empresas_id'         => 'ForeignKey',
      'total_planificacion' => 'Number',
      'fecha_planificacion' => 'Date',
    );
  }
}

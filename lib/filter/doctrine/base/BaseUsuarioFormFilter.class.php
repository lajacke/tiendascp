<?php

/**
 * Usuario filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'         => new sfWidgetFormFilterInput(),
      'apellido'       => new sfWidgetFormFilterInput(),
      'ulogin'         => new sfWidgetFormFilterInput(),
      'upassword'      => new sfWidgetFormFilterInput(),
      'acceso'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'estatus'        => new sfWidgetFormFilterInput(),
      'pass_exp'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'semilla'        => new sfWidgetFormFilterInput(),
      'empresas_id'    => new sfWidgetFormFilterInput(),
      'nombre_empresa' => new sfWidgetFormFilterInput(),
      'correo'         => new sfWidgetFormFilterInput(),
      'telefono'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ci'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'apellido'       => new sfValidatorPass(array('required' => false)),
      'ulogin'         => new sfValidatorPass(array('required' => false)),
      'upassword'      => new sfValidatorPass(array('required' => false)),
      'acceso'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'estatus'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pass_exp'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'semilla'        => new sfValidatorPass(array('required' => false)),
      'empresas_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre_empresa' => new sfValidatorPass(array('required' => false)),
      'correo'         => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'ci'             => 'Number',
      'nombre'         => 'Text',
      'apellido'       => 'Text',
      'ulogin'         => 'Text',
      'upassword'      => 'Text',
      'acceso'         => 'Date',
      'estatus'        => 'Number',
      'pass_exp'       => 'Date',
      'semilla'        => 'Text',
      'id'             => 'Number',
      'empresas_id'    => 'Number',
      'nombre_empresa' => 'Text',
      'correo'         => 'Text',
      'telefono'       => 'Text',
    );
  }
}

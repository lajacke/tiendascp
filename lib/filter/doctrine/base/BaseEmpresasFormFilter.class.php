<?php

/**
 * Empresas filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpresasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_empresa'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actividad_economica' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rif'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'localidad'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coordenada_x'        => new sfWidgetFormFilterInput(),
      'coordenada_y'        => new sfWidgetFormFilterInput(),
      'ejes_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ejes'), 'add_empty' => true)),
      'ambitos_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ambitos'), 'add_empty' => true)),
      'parroquias_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquias'), 'add_empty' => true)),
      'tipo_empresas_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEmpresas'), 'add_empty' => true)),
      'status_empresas_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('StatusEmpresas'), 'add_empty' => true)),
      'bicentenario'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'nombre_empresa'      => new sfValidatorPass(array('required' => false)),
      'actividad_economica' => new sfValidatorPass(array('required' => false)),
      'rif'                 => new sfValidatorPass(array('required' => false)),
      'direccion'           => new sfValidatorPass(array('required' => false)),
      'localidad'           => new sfValidatorPass(array('required' => false)),
      'coordenada_x'        => new sfValidatorPass(array('required' => false)),
      'coordenada_y'        => new sfValidatorPass(array('required' => false)),
      'ejes_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ejes'), 'column' => 'id')),
      'ambitos_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ambitos'), 'column' => 'id')),
      'parroquias_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parroquias'), 'column' => 'id')),
      'tipo_empresas_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoEmpresas'), 'column' => 'id')),
      'status_empresas_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('StatusEmpresas'), 'column' => 'id')),
      'bicentenario'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('empresas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresas';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nombre_empresa'      => 'Text',
      'actividad_economica' => 'Text',
      'rif'                 => 'Text',
      'direccion'           => 'Text',
      'localidad'           => 'Text',
      'coordenada_x'        => 'Text',
      'coordenada_y'        => 'Text',
      'ejes_id'             => 'ForeignKey',
      'ambitos_id'          => 'ForeignKey',
      'parroquias_id'       => 'ForeignKey',
      'tipo_empresas_id'    => 'ForeignKey',
      'status_empresas_id'  => 'ForeignKey',
      'bicentenario'        => 'Boolean',
    );
  }
}

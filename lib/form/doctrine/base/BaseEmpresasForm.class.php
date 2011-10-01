<?php

/**
 * Empresas form base class.
 *
 * @method Empresas getObject() Returns the current form's model object
 *
 * @package    tienda_scp
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpresasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre_empresa'      => new sfWidgetFormTextarea(),
      'actividad_economica' => new sfWidgetFormTextarea(),
      'rif'                 => new sfWidgetFormTextarea(),
      'direccion'           => new sfWidgetFormTextarea(),
      'localidad'           => new sfWidgetFormTextarea(),
      'coordenada_x'        => new sfWidgetFormTextarea(),
      'coordenada_y'        => new sfWidgetFormTextarea(),
      'ejes_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ejes'), 'add_empty' => false)),
      'ambitos_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ambitos'), 'add_empty' => false)),
      'parroquias_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquias'), 'add_empty' => false)),
      'tipo_empresas_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEmpresas'), 'add_empty' => false)),
      'status_empresas_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('StatusEmpresas'), 'add_empty' => false)),
      'bicentenario'        => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre_empresa'      => new sfValidatorString(),
      'actividad_economica' => new sfValidatorString(),
      'rif'                 => new sfValidatorString(),
      'direccion'           => new sfValidatorString(),
      'localidad'           => new sfValidatorString(),
      'coordenada_x'        => new sfValidatorString(array('required' => false)),
      'coordenada_y'        => new sfValidatorString(array('required' => false)),
      'ejes_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ejes'))),
      'ambitos_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ambitos'))),
      'parroquias_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquias'))),
      'tipo_empresas_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEmpresas'))),
      'status_empresas_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('StatusEmpresas'))),
      'bicentenario'        => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresas';
  }

}

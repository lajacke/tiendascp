<?php

/**
 * Ambitos filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbitosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'                                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coordenada_longitud'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coordenada_latitud'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_de_ambito_industrial'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vias_de_acceso_a_la_fabrica_en_buen_estado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'                                     => new sfValidatorPass(array('required' => false)),
      'coordenada_longitud'                        => new sfValidatorPass(array('required' => false)),
      'coordenada_latitud'                         => new sfValidatorPass(array('required' => false)),
      'tipo_de_ambito_industrial'                  => new sfValidatorPass(array('required' => false)),
      'vias_de_acceso_a_la_fabrica_en_buen_estado' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambitos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambitos';
  }

  public function getFields()
  {
    return array(
      'id'                                         => 'Number',
      'nombre'                                     => 'Text',
      'coordenada_longitud'                        => 'Text',
      'coordenada_latitud'                         => 'Text',
      'tipo_de_ambito_industrial'                  => 'Text',
      'vias_de_acceso_a_la_fabrica_en_buen_estado' => 'Text',
    );
  }
}

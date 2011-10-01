<?php

/**
 * Parroquias filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParroquiasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'municipios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipios'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'municipios_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipios'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('parroquias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parroquias';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Text',
      'nombre'        => 'Text',
      'municipios_id' => 'ForeignKey',
    );
  }
}

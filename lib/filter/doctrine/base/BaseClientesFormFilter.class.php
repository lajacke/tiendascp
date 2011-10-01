<?php

/**
 * Clientes filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClientesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_clientes_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoClientes'), 'add_empty' => true)),
      'cliente_rif'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empresas_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'tipo_clientes_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoClientes'), 'column' => 'id')),
      'cliente_rif'      => new sfValidatorPass(array('required' => false)),
      'empresas_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresas'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('clientes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientes';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'nombre'           => 'Text',
      'tipo_clientes_id' => 'ForeignKey',
      'cliente_rif'      => 'Text',
      'empresas_id'      => 'ForeignKey',
    );
  }
}

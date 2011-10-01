<?php

/**
 * Productos filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'denominacion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'especificaciones' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'presentacion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio_real'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empresas_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => true)),
      'cantidad_inicial' => new sfWidgetFormFilterInput(),
      'categorias_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'denominacion'     => new sfValidatorPass(array('required' => false)),
      'especificaciones' => new sfValidatorPass(array('required' => false)),
      'presentacion'     => new sfValidatorPass(array('required' => false)),
      'precio_real'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'empresas_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresas'), 'column' => 'id')),
      'cantidad_inicial' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'categorias_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('productos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Productos';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'nombre'           => 'Text',
      'denominacion'     => 'Text',
      'especificaciones' => 'Text',
      'presentacion'     => 'Text',
      'precio_real'      => 'Number',
      'empresas_id'      => 'ForeignKey',
      'cantidad_inicial' => 'Number',
      'categorias_id'    => 'Number',
    );
  }
}

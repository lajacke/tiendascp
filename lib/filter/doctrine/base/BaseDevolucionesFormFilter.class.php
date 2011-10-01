<?php

/**
 * Devoluciones filter form base class.
 *
 * @package    tienda_scp
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDevolucionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ventas_maestro_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentasMaestro'), 'add_empty' => true)),
      'empresas_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresas'), 'add_empty' => true)),
      'cant_devuelta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ventas_maestro_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('VentasMaestro'), 'column' => 'id')),
      'empresas_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresas'), 'column' => 'id')),
      'cant_devuelta'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('devoluciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Devoluciones';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'ventas_maestro_id' => 'ForeignKey',
      'empresas_id'       => 'ForeignKey',
      'cant_devuelta'     => 'Number',
    );
  }
}

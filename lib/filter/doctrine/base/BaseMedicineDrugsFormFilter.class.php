<?php

/**
 * MedicineDrugs filter form base class.
 *
 * @package    medicine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedicineDrugsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'drug_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'        => new sfWidgetFormFilterInput(),
      'company'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'logo'        => new sfWidgetFormFilterInput(),
      'url'         => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'price'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'instock'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'expires_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'drug_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'type'        => new sfValidatorPass(array('required' => false)),
      'company'     => new sfValidatorPass(array('required' => false)),
      'logo'        => new sfValidatorPass(array('required' => false)),
      'url'         => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'price'       => new sfValidatorPass(array('required' => false)),
      'instock'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'expires_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('medicine_drugs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicineDrugs';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'drug_id'     => 'Number',
      'type'        => 'Text',
      'company'     => 'Text',
      'logo'        => 'Text',
      'url'         => 'Text',
      'description' => 'Text',
      'price'       => 'Text',
      'instock'     => 'Boolean',
      'expires_at'  => 'Date',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}

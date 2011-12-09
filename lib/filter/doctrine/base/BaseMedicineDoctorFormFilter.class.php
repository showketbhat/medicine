<?php

/**
 * MedicineDoctor filter form base class.
 *
 * @package    medicine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedicineDoctorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'doctor_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'          => new sfWidgetFormFilterInput(),
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'spcialisation' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'photo'         => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'doctor_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'type'          => new sfValidatorPass(array('required' => false)),
      'name'          => new sfValidatorPass(array('required' => false)),
      'spcialisation' => new sfValidatorPass(array('required' => false)),
      'photo'         => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('medicine_doctor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicineDoctor';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'doctor_id'     => 'Number',
      'type'          => 'Text',
      'name'          => 'Text',
      'spcialisation' => 'Text',
      'photo'         => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}

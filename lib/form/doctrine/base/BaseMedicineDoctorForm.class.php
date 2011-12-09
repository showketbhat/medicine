<?php

/**
 * MedicineDoctor form base class.
 *
 * @method MedicineDoctor getObject() Returns the current form's model object
 *
 * @package    medicine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicineDoctorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'doctor_id'     => new sfWidgetFormInputText(),
      'type'          => new sfWidgetFormInputText(),
      'name'          => new sfWidgetFormInputText(),
      'spcialisation' => new sfWidgetFormInputText(),
      'photo'         => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'doctor_id'     => new sfValidatorInteger(),
      'type'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'spcialisation' => new sfValidatorString(array('max_length' => 255)),
      'photo'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('medicine_doctor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicineDoctor';
  }

}

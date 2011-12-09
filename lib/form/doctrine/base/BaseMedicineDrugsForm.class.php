<?php

/**
 * MedicineDrugs form base class.
 *
 * @method MedicineDrugs getObject() Returns the current form's model object
 *
 * @package    medicine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicineDrugsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'drug_id'     => new sfWidgetFormInputText(),
      'type'        => new sfWidgetFormInputText(),
      'company'     => new sfWidgetFormInputText(),
      'logo'        => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'price'       => new sfWidgetFormTextarea(),
      'instock'     => new sfWidgetFormInputCheckbox(),
      'expires_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'drug_id'     => new sfValidatorInteger(),
      'type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company'     => new sfValidatorString(array('max_length' => 255)),
      'logo'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 4000)),
      'price'       => new sfValidatorString(array('max_length' => 4000)),
      'instock'     => new sfValidatorBoolean(array('required' => false)),
      'expires_at'  => new sfValidatorDateTime(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('medicine_drugs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicineDrugs';
  }

}

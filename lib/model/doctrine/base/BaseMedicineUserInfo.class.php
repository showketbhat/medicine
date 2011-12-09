<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MedicineUserInfo', 'doctrine');

/**
 * BaseMedicineUserInfo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $fullname
 * @property string $country
 * @property string $phone
 * @property string $website
 * 
 * @method integer          getId()       Returns the current record's "id" value
 * @method string           getFullname() Returns the current record's "fullname" value
 * @method string           getCountry()  Returns the current record's "country" value
 * @method string           getPhone()    Returns the current record's "phone" value
 * @method string           getWebsite()  Returns the current record's "website" value
 * @method MedicineUserInfo setId()       Sets the current record's "id" value
 * @method MedicineUserInfo setFullname() Sets the current record's "fullname" value
 * @method MedicineUserInfo setCountry()  Sets the current record's "country" value
 * @method MedicineUserInfo setPhone()    Sets the current record's "phone" value
 * @method MedicineUserInfo setWebsite()  Sets the current record's "website" value
 * 
 * @package    medicine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedicineUserInfo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('medicine_user_info');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('fullname', 'string', 256, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 256,
             ));
        $this->hasColumn('country', 'string', 256, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 256,
             ));
        $this->hasColumn('phone', 'string', 256, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 256,
             ));
        $this->hasColumn('website', 'string', 256, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 256,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
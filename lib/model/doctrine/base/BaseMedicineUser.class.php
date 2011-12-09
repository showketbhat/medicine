<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MedicineUser', 'doctrine');

/**
 * BaseMedicineUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $type
 * @property string $name
 * @property string $password
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer      getId()         Returns the current record's "id" value
 * @method integer      getUserId()     Returns the current record's "user_id" value
 * @method string       getType()       Returns the current record's "type" value
 * @method string       getName()       Returns the current record's "name" value
 * @method string       getPassword()   Returns the current record's "password" value
 * @method timestamp    getCreatedAt()  Returns the current record's "created_at" value
 * @method timestamp    getUpdatedAt()  Returns the current record's "updated_at" value
 * @method MedicineUser setId()         Sets the current record's "id" value
 * @method MedicineUser setUserId()     Sets the current record's "user_id" value
 * @method MedicineUser setType()       Sets the current record's "type" value
 * @method MedicineUser setName()       Sets the current record's "name" value
 * @method MedicineUser setPassword()   Sets the current record's "password" value
 * @method MedicineUser setCreatedAt()  Sets the current record's "created_at" value
 * @method MedicineUser setUpdatedAt()  Sets the current record's "updated_at" value
 * 
 * @package    medicine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedicineUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('medicine_user');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('user_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
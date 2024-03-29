<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Test', 'doctrine');

/**
 * BaseTest
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property timestamp $date
 * @property string $fname
 * @property string $lname
 * @property integer $age
 * @property string $height
 * @property string $gender
 * @property string $weight
 * @property integer $modeling
 * @property integer $acting
 * @property integer $theater
 * @property string $address
 * @property string $city
 * @property string $state
 * @property integer $zipcode
 * @property string $phone
 * @property string $cellphone
 * @property string $email
 * @property string $comments
 * 
 * @method integer   getId()        Returns the current record's "id" value
 * @method timestamp getDate()      Returns the current record's "date" value
 * @method string    getFname()     Returns the current record's "fname" value
 * @method string    getLname()     Returns the current record's "lname" value
 * @method integer   getAge()       Returns the current record's "age" value
 * @method string    getHeight()    Returns the current record's "height" value
 * @method string    getGender()    Returns the current record's "gender" value
 * @method string    getWeight()    Returns the current record's "weight" value
 * @method integer   getModeling()  Returns the current record's "modeling" value
 * @method integer   getActing()    Returns the current record's "acting" value
 * @method integer   getTheater()   Returns the current record's "theater" value
 * @method string    getAddress()   Returns the current record's "address" value
 * @method string    getCity()      Returns the current record's "city" value
 * @method string    getState()     Returns the current record's "state" value
 * @method integer   getZipcode()   Returns the current record's "zipcode" value
 * @method string    getPhone()     Returns the current record's "phone" value
 * @method string    getCellphone() Returns the current record's "cellphone" value
 * @method string    getEmail()     Returns the current record's "email" value
 * @method string    getComments()  Returns the current record's "comments" value
 * @method Test      setId()        Sets the current record's "id" value
 * @method Test      setDate()      Sets the current record's "date" value
 * @method Test      setFname()     Sets the current record's "fname" value
 * @method Test      setLname()     Sets the current record's "lname" value
 * @method Test      setAge()       Sets the current record's "age" value
 * @method Test      setHeight()    Sets the current record's "height" value
 * @method Test      setGender()    Sets the current record's "gender" value
 * @method Test      setWeight()    Sets the current record's "weight" value
 * @method Test      setModeling()  Sets the current record's "modeling" value
 * @method Test      setActing()    Sets the current record's "acting" value
 * @method Test      setTheater()   Sets the current record's "theater" value
 * @method Test      setAddress()   Sets the current record's "address" value
 * @method Test      setCity()      Sets the current record's "city" value
 * @method Test      setState()     Sets the current record's "state" value
 * @method Test      setZipcode()   Sets the current record's "zipcode" value
 * @method Test      setPhone()     Sets the current record's "phone" value
 * @method Test      setCellphone() Sets the current record's "cellphone" value
 * @method Test      setEmail()     Sets the current record's "email" value
 * @method Test      setComments()  Sets the current record's "comments" value
 * 
 * @package    models
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTest extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('test');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fname', 'string', 100, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('lname', 'string', 100, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('age', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('height', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('gender', 'string', 5, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('weight', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('modeling', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('acting', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('theater', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('address', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('city', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('state', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('zipcode', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('phone', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('cellphone', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('comments', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
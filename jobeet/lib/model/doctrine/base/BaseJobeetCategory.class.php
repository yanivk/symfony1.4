<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JobeetCategory', 'doctrine');

/**
 * BaseJobeetCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $JobeetCategoryAffiliate
 * @property Doctrine_Collection $JobeetJob
 * 
 * @method integer             get()                        Returns the current record's "id" value
 * @method string              get()                        Returns the current record's "name" value
 * @method timestamp           get()                        Returns the current record's "created_at" value
 * @method timestamp           get()                        Returns the current record's "updated_at" value
 * @method Doctrine_Collection get()                        Returns the current record's "JobeetCategoryAffiliate" collection
 * @method Doctrine_Collection get()                        Returns the current record's "JobeetJob" collection
 * @method JobeetCategory      set()                        Sets the current record's "id" value
 * @method JobeetCategory      set()                        Sets the current record's "name" value
 * @method JobeetCategory      set()                        Sets the current record's "created_at" value
 * @method JobeetCategory      set()                        Sets the current record's "updated_at" value
 * @method JobeetCategory      set()                        Sets the current record's "JobeetCategoryAffiliate" collection
 * @method JobeetCategory      set()                        Sets the current record's "JobeetJob" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_category');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
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
        $this->hasMany('JobeetCategoryAffiliate', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('JobeetJob', array(
             'local' => 'id',
             'foreign' => 'category_id'));
    }
}
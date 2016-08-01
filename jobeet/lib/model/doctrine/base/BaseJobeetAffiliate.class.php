<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JobeetAffiliate', 'doctrine');

/**
 * BaseJobeetAffiliate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $url
 * @property string $email
 * @property string $token
 * @property integer $is_active
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $JobeetCategoryAffiliate
 * 
 * @method integer             get()                        Returns the current record's "id" value
 * @method string              get()                        Returns the current record's "url" value
 * @method string              get()                        Returns the current record's "email" value
 * @method string              get()                        Returns the current record's "token" value
 * @method integer             get()                        Returns the current record's "is_active" value
 * @method timestamp           get()                        Returns the current record's "created_at" value
 * @method timestamp           get()                        Returns the current record's "updated_at" value
 * @method Doctrine_Collection get()                        Returns the current record's "JobeetCategoryAffiliate" collection
 * @method JobeetAffiliate     set()                        Sets the current record's "id" value
 * @method JobeetAffiliate     set()                        Sets the current record's "url" value
 * @method JobeetAffiliate     set()                        Sets the current record's "email" value
 * @method JobeetAffiliate     set()                        Sets the current record's "token" value
 * @method JobeetAffiliate     set()                        Sets the current record's "is_active" value
 * @method JobeetAffiliate     set()                        Sets the current record's "created_at" value
 * @method JobeetAffiliate     set()                        Sets the current record's "updated_at" value
 * @method JobeetAffiliate     set()                        Sets the current record's "JobeetCategoryAffiliate" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetAffiliate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_affiliate');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
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
             'foreign' => 'affiliate_id'));
    }
}
<?php

/**
 * BasePerformanceReviewComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $performanceReviewId
 * @property integer $employeeId
 * @property string $comment
 * @property date $createDate
 * @property Employee $Employee
 * @property PerformanceReview $PerformanceReview
 * 
 * @method integer                  getId()                  Returns the current record's "id" value
 * @method integer                  getPerformanceReviewId() Returns the current record's "performanceReviewId" value
 * @method integer                  getEmployeeId()          Returns the current record's "employeeId" value
 * @method string                   getComment()             Returns the current record's "comment" value
 * @method date                     getCreateDate()          Returns the current record's "createDate" value
 * @method Employee                 getEmployee()            Returns the current record's "Employee" value
 * @method PerformanceReview        getPerformanceReview()   Returns the current record's "PerformanceReview" value
 * @method PerformanceReviewComment setId()                  Sets the current record's "id" value
 * @method PerformanceReviewComment setPerformanceReviewId() Sets the current record's "performanceReviewId" value
 * @method PerformanceReviewComment setEmployeeId()          Sets the current record's "employeeId" value
 * @method PerformanceReviewComment setComment()             Sets the current record's "comment" value
 * @method PerformanceReviewComment setCreateDate()          Sets the current record's "createDate" value
 * @method PerformanceReviewComment setEmployee()            Sets the current record's "Employee" value
 * @method PerformanceReviewComment setPerformanceReview()   Sets the current record's "PerformanceReview" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePerformanceReviewComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_performance_review_comments');
        $this->hasColumn('id as id', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 13,
             ));
        $this->hasColumn('pr_id as performanceReviewId', 'integer', 13, array(
             'type' => 'integer',
             'length' => 13,
             ));
        $this->hasColumn('employee_id as employeeId', 'integer', 13, array(
             'type' => 'integer',
             'length' => 13,
             ));
        $this->hasColumn('comment as comment', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('create_date as createDate', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Employee', array(
             'local' => 'employeeId',
             'foreign' => 'emp_number'));

        $this->hasOne('PerformanceReview', array(
             'local' => 'pr_id',
             'foreign' => 'id'));
    }
}
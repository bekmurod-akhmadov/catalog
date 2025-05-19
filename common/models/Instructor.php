<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "instructor".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string|null $academic_degree
 * @property string|null $description
 * @property int|null $department
 * @property int|null $school
 * @property int|null $administrative_position
 * @property int|null $academic_position
 * @property int|null $status
 */
class Instructor extends \yii\db\ActiveRecord
{
    const STATUS_FULL_TIME = 1;
    const STATUS_PART_TIME = 2;
    const STATUS_ADJUNCT = 3;

    const STATUS_VISITING = 4;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['academic_degree', 'description', 'department', 'school', 'administrative_position', 'academic_position', 'status'], 'default', 'value' => null],
            [['last_name', 'first_name'], 'required'],
            [['description'], 'string'],
            [['department', 'school', 'administrative_position', 'academic_position', 'status'], 'integer'],
            [['last_name', 'first_name', 'academic_degree'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'academic_degree' => 'Academic Degree',
            'description' => 'Description',
            'department' => 'Department',
            'school' => 'School',
            'administrative_position' => 'Administrative Position',
            'academic_position' => 'Academic Position',
            'status' => 'Status',
        ];
    }

    public static function getAdminstrativeList()
    {
        return [
            0 => 'Dean',
            1 => 'Associate Dean',
            2 => 'Assistant Dean',
            3 => 'Director',
            4 => 'Head of Department',
        ];
    }
    public static function getAcademicPositionList()
    {
        return [
            0  => 'Professor',
            1  => 'Associate Professor',
            2  => 'Assistant Professor',
            3  => 'Professor in Practice',
            4  => 'Visiting Full-time Professor',
            5  => 'Visiting Associate Professor',
            6  => 'Senior Lecturer',
            7  => 'Lecturer',
            8  => 'Postdoc',
            9  => 'Faculty Vacant',
            10 => 'Teaching Assistant',
            11 => 'Lab Assistant',
            12 => 'Support Teaching Assistant',
            13 => 'Assistant Vacant',
        ];
    }

    public function getDepartments()
    {
        return ArrayHelper::map(Department::find()->all() , 'id' , 'name');
    }

    public static function getAcademicDegreeList()
    {
        return [
            0  => 'Ph.D.',
            1  => 'D.Sc.',
            2  => 'Masters',
            3  => 'Bachelor',
        ];
    }

    public static function getSchoolList()
    {
        return [
            0 => 'School of Computing',
            1 => 'School of Engineering',
            2 => 'School of Humanities, Natural & Social Sciences',
            3 => 'School of Management',
            4 => 'Center for Academic Excellence'
        ];
    }

    public static function getStatusList()
    {
        return [
            self::STATUS_FULL_TIME   => 'Full-Time',
            self::STATUS_PART_TIME   => 'Part-Time',
            self::STATUS_ADJUNCT     => 'Adjunct',
            self::STATUS_VISITING    => 'Visiting',
        ];
    }

}

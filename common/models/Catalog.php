<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "catalog".
 *
 * @property int $id
 * @property int $subject_board
 * @property string $course_name
 * @property string $department
 * @property string|null $description
 * @property string|null $course_code
 * @property string|null $prerequisite
 * @property int|null $lecture_hours
 * @property int|null $tutorials_hours
 * @property int|null $lab_hours
 * @property string|null $semester
 * @property int|null $ects_credit
 * @property int|null $us_credit
 * @property int|null $degree
 * @property string|null $syllabus_template
 * @property string|null $term
 * @property string|null $part_of_team
 * @property string|null $format
 * @property string|null $section_status
 * @property int|null $maximum_enrollment
 * @property int|null $seats_avail
 * @property string|null $waitlist_total
 * @property string|null $last_day_to_register
 * @property int|null $instructor
 * @property string|null $meeting_info
 * @property string|null $notes
 */
class Catalog extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'description', 'course_code', 'prerequisite', 'lecture_hours', 'tutorials_hours', 'lab_hours', 'semester', 'ects_credit', 'us_credit', 'syllabus_template', 'term', 'part_of_team', 'format', 'section_status', 'maximum_enrollment', 'seats_avail', 'waitlist_total', 'last_day_to_register', 'instructor', 'meeting_info', 'notes', 'subject_board_id'], 'default', 'value' => null],
            [['subject_board', 'course_name', 'department' , 'course_type' , 'program' , 'year' , 'degree'], 'required'],
            [['subject_board', 'status','year', 'course_type' ,'lecture_hours', 'tutorials_hours', 'lab_hours', 'ects_credit', 'us_credit', 'degree', 'maximum_enrollment', 'seats_avail', 'instructor'], 'integer'],
            [['description'], 'string'],
            [['last_day_to_register' , 'last_date_to_add_or_drop'], 'safe'],
            [['course_name', 'department', 'course_code', 'prerequisite', 'semester', 'syllabus_template', 'term', 'part_of_team', 'format', 'section_status', 'waitlist_total', 'meeting_info', 'notes'], 'string', 'max' => 255],
            ['program', 'safe'],
            ['program', 'validateJson']
        ];
    }

    public function validateJson($attribute, $params)
    {
        if (is_array($this->$attribute)) {
            return;
        }

        json_decode($this->$attribute);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->addError($attribute, 'Program ID must be a valid JSON string.');
        }
    }

    public function beforeSave($insert)
    {
        if (is_array($this->program)) {
            $this->program = json_encode($this->program);
        }
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $this->program = json_decode($this->program, true);
        parent::afterFind();
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_board' => 'Subject Board',
            'course_name' => 'Course Name',
            'department' => 'Department',
            'description' => 'Description',
            'course_code' => 'Course Code',
            'prerequisite' => 'Prerequisite',
            'lecture_hours' => 'Lecture Hours',
            'tutorials_hours' => 'Tutorials Hours',
            'lab_hours' => 'Lab Hours',
            'semester' => 'Semester',
            'ects_credit' => 'Ects Credit',
            'us_credit' => 'Us Credit',
            'degree' => 'Degree',
            'syllabus_template' => 'Syllabus Template',
            'term' => 'Term',
            'part_of_team' => 'Part Of Team',
            'format' => 'Format',
            'section_status' => 'Grade Status',
            'maximum_enrollment' => 'Maximum Enrollment',
            'seats_avail' => 'Seats Avail',
            'waitlist_total' => 'Waitlist Total',
            'last_day_to_register' => 'Last Day To Register',
            'last_date_to_add_or_drop' => 'Last Date To add/drop',
            'instructor' => 'Instructor',
            'meeting_info' => 'Meeting Info',
            'notes' => 'Notes',
            'program' => "Program",
        ];
    }

    public static function getSubjectBoards()
    {
        return ArrayHelper::map(SubjectBoard::find()->all() , 'id' , 'name');
    }
    public static function getDepartments()
    {
        return ArrayHelper::map(Department::find()->all() , 'id' , 'name');
    }

    public function getFindDepartment()
    {
        return $this->hasOne(Department::class , ['id' => 'department']);
    }

    public static function getInstructors()
    {
        return ArrayHelper::map(Instructor::find()->all(), 'id', function ($model) {
            return $model->last_name . ' ' . $model->first_name;
        });
    }

    public function getFindInstructor()
    {
        return $this->hasOne(Instructor::class , ['id' => 'instructor']);
    }

    public static function getApplicationTypes ()
    {
        return [
            '1' =>'BACHELOR',
            '2' =>'MASTERS',
        ];
    }

    public function getSubjectBoard()
    {
        return $this->hasOne(SubjectBoard::class , ['id' => 'subject_board']);
    }

    public static function getTermList()
    {
        return [
            '1' => 'Fall 2025',
            '2' => 'Spring 2026',
        ];
    }
    public static function getCourseTypeList()
    {
        return ArrayHelper::map(CourseType::find()->all(), 'id', 'name');
    }

    public static function getPrograms()
    {
        return ArrayHelper::map(Program::find()->all() , 'id' , 'name');
    }

    public static function getYears()
    {
        return ArrayHelper::map(Year::find()->all() , 'id' , 'year');
    }

    public static function getStatusList()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE => 'Inactive',
        ];
    }

    public static function getListByProgramId(int $id)
    {
        if ($id <= 0) {
            return null;
        }

        // Assuming the 'program' column is of type JSON or JSONB
        return self::find()
            ->where(['like', 'program', '"'.$id.'"'])
            ->all();
    }

}

<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $course_code
 * @property int $subjectboard_id
 * @property string $course_name
 * @property int $course_type
 * @property string|null $prerequisite
 * @property int|null $lecture
 * @property int|null $tutorial_and_lab
 * @property int|null $ects
 * @property int|null $status
 * @property int $semester_id
 */
class Course extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prerequisite', 'lecture', 'tutorial_and_lab', 'ects'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 1],
            [['course_code', 'subjectboard_id', 'course_name', 'course_type', 'semester_id','program_id' , 'year_id'], 'required'],
            [['subjectboard_id', 'course_type', 'lecture', 'tutorial_and_lab', 'ects', 'status', 'semester_id' , 'year_id'], 'integer'],
            [['course_code', 'course_name', 'prerequisite'], 'string', 'max' => 255],
            ['program_id', 'safe'],
            ['program_id', 'validateJson']
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

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_code' => 'Course Code',
            'subjectboard_id' => 'Subjectboard ID',
            'course_name' => 'Course Name',
            'course_type' => 'Course Type',
            'prerequisite' => 'Prerequisite',
            'lecture' => 'Lecture',
            'tutorial_and_lab' => 'Tutorial And Lab',
            'ects' => 'Ects',
            'status' => 'Status',
            'semester_id' => 'Semester ID',
            'program_id' => 'Program',
            'year_id' => 'Year',
        ];
    }

    public static function getSubjectList()
    {
        return ArrayHelper::map(SubjectBoard::find()->all(), 'id', 'name');
    }

    public static function getCourseTypeList()
    {
        return ArrayHelper::map(CourseType::find()->all(), 'id', 'name');
    }

    public static function getStatusList()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE => 'Inactive',
        ];
    }


    public function getSubjectBoard()
    {
        return $this->hasOne(SubjectBoard::class, ['id' => 'subjectboard_id']);
    }

    public function getCourseType()
    {
        return $this->hasOne(CourseType::class, ['id' => 'course_type']);
    }
    public static function getCourseTypes()
    {
        return ArrayHelper::map(CourseType::find()->all(),'id' , 'name');
    }


    public static function getPrograms()
    {
        return ArrayHelper::map(Program::find()->all() , 'id' , 'name');
    }

    public static function getYears()
    {
        return ArrayHelper::map(Year::find()->all() , 'id' , 'year');
    }

    public static function getSemesterList()
    {
        return ArrayHelper::map(Semester::find()->all() , 'id' , 'semester');
    }

    public function beforeSave($insert)
    {
        if (is_array($this->program_id)) {
            $this->program_id = json_encode($this->program_id);
        }
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $this->program_id = json_decode($this->program_id, true);
        parent::afterFind();
    }


}

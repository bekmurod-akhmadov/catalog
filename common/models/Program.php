<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "program".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $application_type
 * @property int $school_type
 */
class Program extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'default', 'value' => null],
            [['name', 'application_type'], 'required'],
            [['description' ,'ep_code'], 'string'],
            [['application_type' , 'school_type'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'application_type' => 'Degree Type',
            'school_type' => 'School',
            'ep_code' => 'EP Code',
        ];
    }
    public static function getTypes()
    {
        return [
            1 => 'BACHELOR',
            2 => 'MASTERS',
        ];
    }

    public static function getApplicationTypeLabel($application_type){
        if(!array_key_exists($application_type, self::getTypes())) {
            return 'Unknown';
        }
        return self::getTypes()[$application_type];
    }

    public static function getSubjectBoards()
    {
        return ArrayHelper::map(SubjectBoard::find()->all() , 'id' ,'name');
    }

    public function getYears()
    {
        return $this->hasMany(Year::class, ['program_id' => 'id']);
    }

    public static function getSemesterName(int $id) :string
    {
        return Semester::findOne($id)->semester ?? '';
    }

    public static function getSchoolsList()
    {
        return [
            1 => 'School of Computing',
            2 => 'School of Humanities,Natural & Social Sciences',
            3 => 'School of Engineering',
            4 => 'School of Management',
        ];
    }
}


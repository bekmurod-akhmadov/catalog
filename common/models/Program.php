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
            [['description'], 'string'],
            [['application_type'], 'integer'],
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
            'application_type' => 'Application Type',
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
}


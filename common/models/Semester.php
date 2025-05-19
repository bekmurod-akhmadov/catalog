<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "semester".
 *
 * @property int $id
 * @property int $year_id
 * @property string $semester
 */
class Semester extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester'], 'required'],
            [['semester'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'semester' => 'Semester',
        ];
    }

    public function getProgram()
    {
        return $this->hasOne(Program::className(), ['id' => 'program_id']);
    }

}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subject_board".
 *
 * @property int $id
 * @property string|null $name
 */
class SubjectBoard extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject_board';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['graduate'] , 'required'],
            [['graduate'] , 'integer'],
            [['name'], 'default', 'value' => null],
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
        ];
    }
    public static function getGraduates(){
        return [
            '1' => 'Undergraduate',
            '2' => 'Graduate',
            '3' => 'Post Graduate',
        ];
    }

}

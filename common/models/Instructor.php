<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "instructor".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string|null $academic_degree
 * @property string|null $description
 */
class Instructor extends \yii\db\ActiveRecord
{


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
            [['academic_degree', 'description'], 'default', 'value' => null],
            [['last_name', 'first_name'], 'required'],
            [['description'], 'string'],
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
        ];
    }

}

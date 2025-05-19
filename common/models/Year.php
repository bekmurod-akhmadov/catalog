<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "year".
 *
 * @property int $id
 * @property string $year
 * @property int $program_id
 */
class Year extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'required'],
            [['year'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
        ];
    }

    public static function getYerById(int $id) :string
    {
        $year = self::findOne($id)->year;
        if (!empty($year))
            return $year;
        return '';
    }
}

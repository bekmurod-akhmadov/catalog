<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Instructor;

/**
 * InstructorSearch represents the model behind the search form of `common\models\Instructor`.
 */
class InstructorSearch extends Instructor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'department', 'school', 'administrative_position', 'academic_position', 'status'], 'integer'],
            [['last_name', 'first_name', 'academic_degree', 'description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Instructor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'department' => $this->department,
            'school' => $this->school,
            'administrative_position' => $this->administrative_position,
            'academic_position' => $this->academic_position,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'academic_degree', $this->academic_degree])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}

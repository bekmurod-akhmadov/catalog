<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Course;

/**
 * CourseSearch represents the model behind the search form of `common\models\Course`.
 */
class CourseSearch extends Course
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subjectboard_id', 'course_type', 'lecture', 'tutorial_and_lab', 'ects', 'status', 'semester_id'], 'integer'],
            [['course_code', 'course_name', 'prerequisite'], 'safe'],
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
        $query = Course::find();

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
            'subjectboard_id' => $this->subjectboard_id,
            'course_type' => $this->course_type,
            'lecture' => $this->lecture,
            'tutorial_and_lab' => $this->tutorial_and_lab,
            'ects' => $this->ects,
            'status' => $this->status,
            'semester_id' => $this->semester_id,
        ]);

        $query->andFilterWhere(['like', 'course_code', $this->course_code])
            ->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'prerequisite', $this->prerequisite]);

        return $dataProvider;
    }
}

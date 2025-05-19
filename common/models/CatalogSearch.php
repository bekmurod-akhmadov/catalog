<?php

namespace common\models;

use common\models\Catalog;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * CatalogSearch represents the model behind the search form of `common\models\Catalog`.
 */
class CatalogSearch extends Catalog
{
    public $search = null;
    public $term = null;
    public $category = null;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['term', 'search'] , 'string'],
            [['id', 'subject_board', 'lecture_hours', 'tutorials_hours', 'lab_hours', 'ects_credit', 'us_credit', 'degree', 'maximum_enrollment', 'seats_avail', 'instructor','category'], 'integer'],
            [['term', 'search', 'course_name', 'department', 'description', 'course_code', 'prerequisite', 'semester', 'syllabus_template', 'term', 'part_of_team', 'format', 'section_status', 'waitlist_total', 'last_day_to_register', 'meeting_info', 'notes','last_date_to_add_or_drop'], 'safe'],
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
        $query = Catalog::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20
            ]
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
            'subject_board' => $this->subject_board,
            'lecture_hours' => $this->lecture_hours,
            'tutorials_hours' => $this->tutorials_hours,
            'lab_hours' => $this->lab_hours,
            'ects_credit' => $this->ects_credit,
            'us_credit' => $this->us_credit,
            'degree' => $this->degree,
            'maximum_enrollment' => $this->maximum_enrollment,
            'seats_avail' => $this->seats_avail,
            'last_day_to_register' => $this->last_day_to_register,
            'last_date_to_add_or_drop' => $this->last_date_to_add_or_drop,
            'instructor' => $this->instructor,
        ]);

        $query->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'course_code', $this->course_code])
            ->andFilterWhere(['like', 'prerequisite', $this->prerequisite])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'syllabus_template', $this->syllabus_template])
            ->andFilterWhere(['like', 'term', $this->term])
            ->andFilterWhere(['like', 'part_of_team', $this->part_of_team])
            ->andFilterWhere(['like', 'format', $this->format])
            ->andFilterWhere(['like', 'section_status', $this->section_status])
            ->andFilterWhere(['like', 'waitlist_total', $this->waitlist_total])
            ->andFilterWhere(['like', 'meeting_info', $this->meeting_info])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }

    public function searchFilter($params)
    {
        $query = Catalog::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if (isset($params['search']) && !empty($params['search'])) {
            $query->andFilterWhere([
                'or',
                ['like', 'course_name', $params['search']],
                ['like', 'description', $params['search']]
            ]);
        }
        if (isset($params['category']) && !empty($params['category'])) {
            $query->andFilterWhere(['subject_board' => $params['category']]);
        }
        if (isset($params['term']) && !empty($params['term'])) {
            $query->andFilterWhere(['term' => $params['term']]);
        }

        return $dataProvider;
    }

    public function searchByDegree($params)
    {
        $query = Catalog::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if (isset($params['department']) && !empty($params['department'])){
            $query->andFilterWhere(['department' => $params['department']]);
        }

        return $dataProvider;
    }
}

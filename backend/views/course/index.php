<?php

use common\models\Course;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\CourseSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course_code',
            [
                'filter' => Course::getSubjectList(),
                'attribute' => 'subjectboard_id',
                'value' => function ($model) {
                    if ($model->subjectBoard) {
                        return $model->subjectBoard->name;
                    }
                    return '';
                },
            ],
            'course_name',
            [
                'filter' => Course::getCourseTypes(),
                'attribute' => 'course_type',
                'value' => function ($model) {
                    if ($model->courseType) {
                        return $model->courseType->name;
                    }
                    return '';
                },
            ],
            [
                'filter' => Course::getStatusList(),
                'attribute' => 'status',
                'value' => function ($model) {
                   if ($model->status == Course::STATUS_INACTIVE)
                       return "<span class='badge badge-danger bg-danger'>".Course::getStatusList()[$model->status]."</span>";
                    return "<span class='badge badge-success bg-success'>".Course::getStatusList()[$model->status]."</span>";
                },
                'format' => 'raw',
            ],
            //'prerequisite',
            //'lecture',
            //'tutorial_and_lab',
            //'ects',
            //'status',
            //'semester_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Course $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use common\models\Catalog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\CatalogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Catalogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catalog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'filter' => Catalog::getSubjectBoards(),
                'attribute' => 'subject_board',
                'value' => function ($model) {
                   if ($model->subjectBoard){
                       return $model->subjectBoard->name;
                   }
                },
            ],
            [
                'filter' => Catalog::getDepartments(),
                'attribute' => 'department',
                'value' => function ($model) {
                    if ($model->findDepartment){
                        return $model->findDepartment->name;
                    }
                },
            ],
            [
                'filter' => Catalog::getInstructors(),
                'attribute' => 'instructor',
                'value' => function ($model) {
                    if ($model->findInstructor){
                        return $model->findInstructor->last_name . ' ' . $model->findInstructor->first_name;
                    }
                },
            ],
            'course_name',
            'description:ntext',
            //'course_code',
            //'prerequisite',
            //'lecture_hours',
            //'tutorials_hours',
            //'lab_hours',
            //'semester',
            //'ects_credit',
            //'us_credit',
            //'degree',
            //'syllabus_template',
            //'term',
            //'part_of_team',
            //'format',
            //'section_status',
            //'maximum_enrollment',
            //'seats_avail',
            //'waitlist_total',
            //'last_day_to_register',
            //'meeting_info',
            //'notes',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Catalog $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

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

    <div class="d-flex align-items-center justify-content-between">
        <h3><?= Html::encode($this->title) ?></h3>

        <p>
            <?= Html::a('Create Program', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'layout' => "{items}\n{pager}",
                'pager' => [
                    'class' => \yii\bootstrap5\LinkPager::class,
                    'options' => ['class' => 'pagination justify-content-center'],
                    'linkOptions' => ['class' => 'page-link'],
                    'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
                    'prevPageCssClass' => 'page-item',
                    'nextPageCssClass' => 'page-item',
                    'pageCssClass' => 'page-item',
                ],
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
                    [
                        'attribute' => 'description',
                        'value' => function (Catalog $model) {
                            if (!empty($model->description)){
                                return \common\components\StaticFunctions::truncateText($model->description);
                            }
                            return '';
                        }
                    ],
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
                        },
                        'template' => '<div class="d-flex">{view} {update} {delete}</div>',
                        'buttons' => [
                            'view' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-eye"></i>', $url, [
                                    'title' => 'Ko‘rish',
                                    'class' => 'btn btn-sm btn-primary me-1',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-edit"></i>', $url, [
                                    'title' => 'Tahrirlash',
                                    'class' => 'btn btn-sm btn-success me-1',
                                ]);
                            },
                            'delete' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-trash"></i>', $url, [
                                    'title' => 'O‘chirish',
                                    'class' => 'btn btn-sm btn-danger me-1',
                                    'data-confirm' => 'Rostdan ham o‘chirmoqchimisiz?',
                                    'data-method' => 'post',
                                ]);
                            },
                        ],
                    ],
                ],
            ]); ?>
        </div>
    </div>


</div>

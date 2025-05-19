<?php

use common\models\Year;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\YearSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Years';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-index">

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
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'year',
//            [
//                'value' => function (Year $model) {
//                    if (!empty($model->program)){
//                        return $model->program->name;
//                    }
//                },
//            ],
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Year $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        },
                        'template' => '{view} {update} {delete}',
                        'buttons' => [
                            'view' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-eye"></i>', $url, [
                                    'title' => 'Ko‘rish',
                                    'class' => 'btn btn-sm btn-primary',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-edit"></i>', $url, [
                                    'title' => 'Tahrirlash',
                                    'class' => 'btn btn-sm btn-success',
                                ]);
                            },
                            'delete' => function ($url, $model, $key) {
                                return Html::a('<i class="fa fa-trash"></i>', $url, [
                                    'title' => 'O‘chirish',
                                    'class' => 'btn btn-sm btn-danger',
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

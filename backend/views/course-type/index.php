<?php

use common\models\CourseType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\CourseTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Course Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-type-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Create Course Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CourseType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'template' => '{view} {update} {delete}',
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

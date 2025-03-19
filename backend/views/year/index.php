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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Year', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'year',
            [
                'value' => function (Year $model) {
                    if (!empty($model->program)){
                        return $model->program->name;
                    }
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Year $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

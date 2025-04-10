<?php

use common\models\SubjectBoard;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\SubjectBoardSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subject Boards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-board-index">

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
                'layout' => "{items}\n{pager}", // jadval va sahifalashni ko‘rsatadi
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
                    'name',
                    [
                        'attribute' => 'graduate',
                        'value' => function (SubjectBoard $model) {
                            if (!empty($model->graduate)){
                                return $model::getGraduates()[$model->graduate];
                            }
                        }
                    ],
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, SubjectBoard $model, $key, $index, $column) {
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
    </div>


</div>

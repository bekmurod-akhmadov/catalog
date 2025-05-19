<?php

use common\models\Program;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Program $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="program-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="card">
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'ep_code',

                    [
                        'attribute' => 'application_type',
                        'value' => function ($model){
                            if (!empty($model->application_type))
                                return Program::getApplicationTypeLabel($model->application_type);
                        }
                    ],
                    [
                        'attribute' => 'school_type',
                        'value' => function ($model){
                            if (!empty($model->school_type))
                                return Program::getSchoolsList()[$model->school_type];
                        }
                    ],
                    'description:ntext',
                ],
            ]) ?>
        </div>
    </div>

</div>

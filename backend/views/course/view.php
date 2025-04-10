<?php

use common\models\Course;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Course $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="course-view">

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
                    'course_code',
                    [
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
                        'attribute' => 'course_type',
                        'value' => function ($model) {
                            if ($model->courseType) {
                                return $model->courseType->name;
                            }
                            return '';
                        },
                    ],
                    'prerequisite',
                    'lecture',
                    'tutorial_and_lab',
                    'ects',
                    [
                        'attribute' => 'status',
                        'value' => function (Course $model) {
                            if ($model->status == Course::STATUS_INACTIVE)
                                return "<span class='badge badge-danger bg-danger'>".Course::getStatusList()[$model->status]."</span>";
                            return "<span class='badge badge-success bg-success'>".Course::getStatusList()[$model->status]."</span>";
                        },
                        'format' => 'raw',
                    ],
                    [
                        'attribute' => 'semester_id',
                        'value' => function (Course $model) {
                            if ($model->semester_id) {
                                return \common\models\Semester::findOne($model->semester_id)->semester;
                            }
                            return '';
                        },
                    ],
                    [
                        'attribute' => 'program',
                        'value' => function (Course $model) {
                            if (!empty($model->program_id)) {
                                return $model->getProgramsById();
                            } else {
                                return '<span>No program</span>';
                            }
                        },
                        'format' => 'html',
                    ]
                ],
            ]) ?>
        </div>
    </div>

</div>

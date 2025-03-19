<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Catalog $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Catalogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="catalog-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'subject_board',
            'course_name',
            'department',
            'description:ntext',
            'course_code',
            'prerequisite',
            'lecture_hours',
            'tutorials_hours',
            'lab_hours',
            'semester',
            'ects_credit',
            'us_credit',
            'degree',
            'syllabus_template',
            'term',
            'part_of_team',
            'format',
            'section_status',
            'maximum_enrollment',
            'seats_avail',
            'waitlist_total',
            'last_day_to_register',
            'instructor',
            'meeting_info',
            'notes',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CourseType $model */

$this->title = 'Update Course Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Course Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="course-type-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

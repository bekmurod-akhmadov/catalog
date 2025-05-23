<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CourseType $model */

$this->title = 'Create Course Type';
$this->params['breadcrumbs'][] = ['label' => 'Course Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-type-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

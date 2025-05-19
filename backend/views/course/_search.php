<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CourseSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'course_code') ?>

    <?= $form->field($model, 'subjectboard_id') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'course_type') ?>

    <?php // echo $form->field($model, 'prerequisite') ?>

    <?php // echo $form->field($model, 'lecture') ?>

    <?php // echo $form->field($model, 'tutorial_and_lab') ?>

    <?php // echo $form->field($model, 'ects') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'semester_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

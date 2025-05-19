<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CatalogSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catalog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'subject_board') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'course_code') ?>

    <?php // echo $form->field($model, 'prerequisite') ?>

    <?php // echo $form->field($model, 'lecture_hours') ?>

    <?php // echo $form->field($model, 'tutorials_hours') ?>

    <?php // echo $form->field($model, 'lab_hours') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'ects_credit') ?>

    <?php // echo $form->field($model, 'us_credit') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'syllabus_template') ?>

    <?php // echo $form->field($model, 'term') ?>

    <?php // echo $form->field($model, 'part_of_team') ?>

    <?php // echo $form->field($model, 'format') ?>

    <?php // echo $form->field($model, 'section_status') ?>

    <?php // echo $form->field($model, 'maximum_enrollment') ?>

    <?php // echo $form->field($model, 'seats_avail') ?>

    <?php // echo $form->field($model, 'waitlist_total') ?>

    <?php // echo $form->field($model, 'last_day_to_register') ?>

    <?php // echo $form->field($model, 'instructor') ?>

    <?php // echo $form->field($model, 'meeting_info') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

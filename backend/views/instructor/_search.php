<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\InstructorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="instructor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'academic_degree') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'school') ?>

    <?php // echo $form->field($model, 'administrative_position') ?>

    <?php // echo $form->field($model, 'academic_position') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Course $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subjectboard_id')->dropDownList($model::getSubjectList() , ['prompt' => 'Select subject board...']) ?>

    <?= $form->field($model, 'course_type')->dropDownList($model::getCourseTypeList() , ['prompt' => 'Select...']) ?>

    <?= $form->field($model, 'prerequisite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lecture')->textInput() ?>

    <?= $form->field($model, 'tutorial_and_lab')->textInput() ?>

    <?= $form->field($model, 'ects')->textInput() ?>

    <?= $form->field($model, 'program_id')->dropDownList($model::getPrograms() , ['prompt' => 'Select...']) ?>

    <?= $form->field($model, 'year_id')->dropDownList($model::getYears() , ['prompt' => 'Select...']) ?>

    <?= $form->field($model, 'semester_id')->dropDownList($model::getSemesterList() , ['prompt' => 'Select...']) ?>

    <?= $form->field($model, 'status')->dropDownList($model::getStatusList()) ?>



    <div class="form-group mt-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

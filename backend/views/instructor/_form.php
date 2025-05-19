<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Instructor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="instructor-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card">
        <div class="card-body">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'academic_degree')->dropDownList($model::getAcademicDegreeList(),['prompt' => 'Select...']) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'department')->dropDownList($model->getDepartments() , ['prompt' => 'Select...']) ?>

            <?= $form->field($model, 'school')->dropDownList($model::getSchoolList() , ['prompt' => 'Select...']) ?>

            <?= $form->field($model, 'administrative_position')->dropDownList($model::getAdminstrativeList() , ['prompt' => 'Select...']) ?>

            <?= $form->field($model, 'academic_position')->dropDownList($model::getAcademicPositionList() , ['prompt' => 'Select...']) ?>

            <?= $form->field($model, 'status')->dropDownList($model::getStatusList() , ['prompt' => 'Select...']) ?>

            <div class="form-group mt-3">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

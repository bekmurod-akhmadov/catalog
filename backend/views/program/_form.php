<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Program $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="program-form">

    <div class="card">
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'ep_code')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'application_type')->dropDownList($model::getTypes()) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'school_type')->dropDownList($model::getSchoolsList() , ['prompt' => "Select..."]) ?>
            </div>
            <div class="form-group mt-3">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

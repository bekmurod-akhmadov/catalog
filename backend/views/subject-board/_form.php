<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\SubjectBoard $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="subject-board-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card">
        <div class="card-body">
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'graduate')->dropDownList($model::getGraduates(), ['prompt' => 'Select...']) ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

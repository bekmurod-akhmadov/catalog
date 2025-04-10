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
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'graduate')->dropDownList($model::getGraduates() , ['prompt' => 'Select...']) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

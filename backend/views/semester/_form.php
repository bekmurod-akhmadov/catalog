<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Semester $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="semester-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card">
        <div class="card-body">
            <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

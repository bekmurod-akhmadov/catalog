<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Year $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="year-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card">
        <div class="card-body">
            <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

            <div class="form-group mt-2">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

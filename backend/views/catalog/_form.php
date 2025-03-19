<?php

use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Catalog $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catalog-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'subject_board')->widget(Select2::classname(), [
                    'data' => $model::getSubjectBoards(),
                    'options' => ['placeholder' => 'Select a state ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            ?>
            <?= $form->field($model, 'department')->widget(Select2::classname(), [
                'data' => $model::getDepartments(),
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>

            <?= $form->field($model, 'instructor')->widget(Select2::classname(), [
                'data' => $model::getInstructors(),
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'course_code')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'prerequisite')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lecture_hours')->textInput() ?>

            <?= $form->field($model, 'tutorials_hours')->textInput() ?>

            <?= $form->field($model, 'lab_hours')->textInput() ?>

            <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'ects_credit')->textInput() ?>
        </div>
        <div class="col-lg-6">

            <?= $form->field($model, 'us_credit')->textInput() ?>

            <?= $form->field($model, 'degree')->dropDownList($model::getApplicationTypes() , ['prompt' => 'Select ...']) ?>

            <?= $form->field($model, 'syllabus_template')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'term')->dropDownList($model::getTermList(),['prompt' => 'Select...']) ?>

            <?= $form->field($model, 'part_of_team')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'format')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'section_status')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'maximum_enrollment')->textInput() ?>

            <?= $form->field($model, 'seats_avail')->textInput() ?>

            <?= $form->field($model, 'waitlist_total')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'last_day_to_register')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter date ...'],
                'value' => date('Y-m-d'),
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]);?>

            <?= $form->field($model, 'last_date_to_add_or_drop')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter date ...'],
                'value' => date('Y-m-d'),
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]);?>

            <?= $form->field($model, 'meeting_info')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("
    $(document).on('pjax:end', function() {
        $('#subject-board-select').select2();
    });
" , \yii\web\View::POS_END);
?>
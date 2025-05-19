<?php

use common\models\Program;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Catalog $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="catalog-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-lg-6">
                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'subject_board')->widget(Select2::classname(), [
                            'data' => $model::getSubjectBoards(),
                            'options' => ['placeholder' => 'Select a state ...'],
                            'pluginOptions' => ['allowClear' => true],
                        ]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'course_code')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'course_type')->dropDownList($model::getCourseTypeList(), ['prompt' => 'Select...']) ?>
                    </div>


                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'prerequisite')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'lecture_hours')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'tutorials_hours')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'lab_hours')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'year')->dropDownList($model::getYears() , ['prompt' => 'Select...']) ?>
                    </div>
                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'ects_credit')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'us_credit')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'department')->widget(Select2::classname(), [
                            'data' => $model::getDepartments(),
                            'options' => ['placeholder' => 'Select a state ...'],
                            'pluginOptions' => ['allowClear' => true],
                        ]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'program')->widget(Select2::classname(), [
                            'data' => $model::getPrograms(),
                            'size' => Select2::MEDIUM,
                            'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
                            'value' => function($model) {
                                $ids = is_string($model->program_id) ? json_decode($model->program_id, true) : (array) $model->program_id;
                                if (!is_array($ids) || empty($ids)) return [];
                                return Program::find()->select(['id', 'title'])->where(['id' => $ids])->indexBy('id')->column();
                            },
                            'pluginOptions' => [
                                'tags' => true,
                                'tokenSeparators' => [',', ' '],
                                'maximumInputLength' => 10,
                                'height' => 'auto'
                            ],
                        ])->label('Program') ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'syllabus_template')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'degree')->dropDownList($model::getApplicationTypes(), ['prompt' => 'Select ...']) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'term')->dropDownList($model::getTermList(), ['prompt' => 'Select...']) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'part_of_team')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'format')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'section_status')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'maximum_enrollment')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'seats_avail')->textInput() ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'waitlist_total')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'last_day_to_register')->widget(DatePicker::classname(), [
                            'options' => ['placeholder' => 'Enter date ...'],
                            'value' => date('Y-m-d'),
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd'
                            ]
                        ]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'last_date_to_add_or_drop')->widget(DatePicker::classname(), [
                            'options' => ['placeholder' => 'Enter date ...'],
                            'value' => date('Y-m-d'),
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd'
                            ]
                        ]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'instructor')->widget(Select2::classname(), [
                            'data' => $model::getInstructors(),
                            'options' => ['placeholder' => 'Select a state ...'],
                            'pluginOptions' => ['allowClear' => true],
                        ]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'meeting_info')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-12 py-2">
                        <?= $form->field($model, 'status')->dropDownList($model::getStatusList()) ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
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
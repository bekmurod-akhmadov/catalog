<?php

use common\models\Program;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Course $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card">
        <div class="card-body">
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'course_code')->widget(Select2::classname(), [
                    'data' => $model::getCatalogList(),
                    'options' => [
                        'id' => 'course_course_code',
                        'placeholder' => 'Select a state ...'
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'subjectboard_id')->dropDownList($model::getSubjectList() , ['prompt' => 'Select subject board...']) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'course_type')->dropDownList($model::getCourseTypeList() , ['prompt' => 'Select...']) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'prerequisite')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'lecture')->textInput() ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'tutorial_and_lab')->textInput() ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'ects')->textInput() ?>
            </div>
            <div class="col-lg-12 py-2">
                <?php
                echo $form->field($model, 'program_id')->widget(Select2::classname(), [
                    'data' => $model::getPrograms(),
                    'size' => Select2::SMALL,
                    'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
                    'value' => function($model) {
                        $ids = is_string($model->program_id) ? json_decode($model->program_id, true) : (array) $model->program_id;
                        if (!is_array($ids) || empty($ids)) {
                            return [];
                        }

                        $titles = Program::find()
                            ->select(['id', 'title'])
                            ->where(['id' => $ids])
                            ->indexBy('id')
                            ->column();

                        return $titles;
                    },
                    'pluginOptions' => [
                        'tags' => true,
                        'tokenSeparators' => [',', ' '],
                        'maximumInputLength' => 10
                    ],
                ])->label('Program');
                ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'year_id')->dropDownList($model::getYears() , ['prompt' => 'Select...']) ?>

            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'semester_id')->dropDownList($model::getSemesterList() , ['prompt' => 'Select...']) ?>
            </div>
            <div class="col-lg-12 py-2">
                <?= $form->field($model, 'status')->dropDownList($model::getStatusList()) ?>
            </div>
            <div class="form-group mt-2">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$js = <<<JS
$(document).ready(function(){
    
    $('#course_course_code').on('change', function(){
        var catalog_id = $(this).val();
        if(catalog_id) {
            $.ajax({
                url: '/admin/course/get-catalog',
                type: 'GET',
                dataType: 'json',
                data: { catalog_id: catalog_id },
                success: function(data) {
                    if(data) {
                        $('#course-course_name').val(data.course_name);
                        $('#course-subjectboard_id').val(data.subjectboard_id).trigger('change');
                        $('#course-course_type').val(data.course_type).trigger('change');
                        $('#course-prerequisite').val(data.prerequisite);
                        $('#course-lecture').val(data.lecture);
                        $('#course-tutorial_and_lab').val(data.tutorial_and_lab);
                        $('#course-ects').val(data.ects);
                    }
                },
                error: function() {
                    console.log('Katalog ma\'lumotlarini olishda xatolik yuz berdi.');
                }
            });
        }
    });
});

JS;
$this->registerJs($js , \yii\web\View::POS_END);

?>
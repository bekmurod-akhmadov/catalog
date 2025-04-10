<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Instructor $model */

$this->title = 'Update Instructor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Instructors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instructor-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

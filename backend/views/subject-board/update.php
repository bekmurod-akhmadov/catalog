<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SubjectBoard $model */

$this->title = 'Update Subject Board: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subject Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subject-board-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

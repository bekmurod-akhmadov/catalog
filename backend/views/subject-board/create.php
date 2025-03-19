<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SubjectBoard $model */

$this->title = 'Create Subject Board';
$this->params['breadcrumbs'][] = ['label' => 'Subject Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-board-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

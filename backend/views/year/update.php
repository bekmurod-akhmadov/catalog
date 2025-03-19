<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Year $model */

$this->title = 'Update Year: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

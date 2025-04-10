<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Year $model */

$this->title = 'Create Year';
$this->params['breadcrumbs'][] = ['label' => 'Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

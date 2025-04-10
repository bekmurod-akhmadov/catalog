<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Instructor $model */

$this->title = 'Create Instructor';
$this->params['breadcrumbs'][] = ['label' => 'Instructors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

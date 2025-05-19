<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Catalog $model */

$this->title = 'Create Catalog';
$this->params['breadcrumbs'][] = ['label' => 'Catalogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

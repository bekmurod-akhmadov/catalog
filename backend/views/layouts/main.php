<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/images/newuu/newuu-dark.png">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/newuu/newuu-dark.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/newuu/newuu-dark.png">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<?php $this->beginBody() ?>

<div class="app-wrapper">

    <?=\backend\widgets\Header::widget()?>
    <?=\backend\widgets\Aside::widget()?>
    <main class="app-main">
        <div class="app-content">
            <div class="container-fluid">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </main>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

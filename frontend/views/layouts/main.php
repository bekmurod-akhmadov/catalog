<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="author" content="NEWUU">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="New Uzbekistan University">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/newuu/newuu-dark.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/newuu/newuu-dark.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/newuu/newuu-dark.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin
    <?php $this->head() ?>
</head>
<body data-mobile-nav-style="classic">
<?php $this->beginBody() ?>
<?=\frontend\widgets\Header::widget()?>
<?=$content?>
<?=\frontend\widgets\Footer::widget()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

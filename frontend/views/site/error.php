<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container" style="margin-top: 200px">
    <div class="site-error">

        <h1><?= Html::encode($this->title) ?></h1>

<!--        <div class="alert alert-danger">-->
<!--            --><?php //= nl2br(Html::encode($message)) ?>
<!--        </div>-->

        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
            <a href="<?=\yii\helpers\Url::home()?>" class="w-100 bg-base-color text-white rounded p-1 my-2">Home</a>
        </p>

    </div>
</div>

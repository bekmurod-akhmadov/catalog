<?php
namespace backend\widgets;
use yii\bootstrap5\Widget;

class Aside extends Widget
{
    public function run()
    {
        return $this->render('aside');
    }
}
<?php

namespace backend\widgets;

use common\models\User;
use Yii;
use yii\bootstrap5\Widget;

class Header extends Widget
{
    public function run()
    {
        $user_id = Yii::$app->user->getId();
        $user = User::findOne($user_id);
        return $this->render('header' , [
            'user' => $user
        ]);
    }
}
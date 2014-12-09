<?php

namespace asgalex\evercookie;


use Yii;
use yii\base\Widget;

class EverCookieWidget extends Widget
{
    public function run()
    {
        /** @var EverCookie $evercookie */
        $evercookie = Yii::$app->evercookie;
        $options = $evercookie->getOptionsJSON();
        return $this->render('evercookie', ['jsonOptions' => $options]);
    }

} 
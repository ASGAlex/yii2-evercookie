<?php

namespace asgalex\evercookie\assets;


use yii\web\AssetBundle;
use yii\web\View;

class EverCookieBaseAssetBundle extends AssetBundle
{
    public $sourcePath = '@vendor/lagman/evercookie';
    public $css = array(
    );
    public $js = array(
        'js/swfobject-2.2.min.js',
        'js/evercookie.js',
    );
    public $depends = array();

    public function init()
    {
        $this->jsOptions['position'] = View::POS_HEAD;
    }


} 
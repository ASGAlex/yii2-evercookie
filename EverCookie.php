<?php

namespace asgalex\evercookie;

use Yii;
use yii\base\Object;
use yii\web\AssetManager;

class EverCookie extends Object
{
    public $history = true;
    public $java = true;
    public $tests = 10;
    public $silverlight = true;
    public $domain = true;
    public $baseurl = '';
    public $asseturi = '/assets';
    public $phpuri = '/php';
    public $authPath = false;
    public $pngCookieName = 'evercookie.png';
    public $pngPath = '/evercookie_png.php';
    public $etagCookieName = 'evercookie_etag';
    public $etagPath = '/evercookie_etag.php';
    public $cacheCookieName = 'evercookie_cache';
    public $cachePath = '/evercookie_cache.php';

    public function init()
    {
        Yii::setAlias('@evercookie', __DIR__);
        parent::init();
    }

    public function getOptionsJSON()
    {
        /** @var AssetManager $assetManager */
        $assetManager = Yii::$app->assetManager;
        $assetPath = $assetManager->getPublishedUrl('@vendor/lagman/evercookie');

        return json_encode(array(
            'history' => $this->history,
            'java' => $this->java,
            'tests' => $this->tests,
            'silverlight' => $this->silverlight,
            'domain' => $this->domain,
            'baseurl' => $this->baseurl,
            'asseturi' => $assetPath . $this->asseturi,
            'phpuri' => $assetPath . $this->phpuri,
            'authPath' => $this->authPath,
            'pngCookieName' => $this->pngCookieName,
            'pngPath' => $this->pngPath,
            'etagCookieName' => $this->etagCookieName,
            'etagPath' => $this->etagPath,
            'cacheCookieName' => $this->cacheCookieName,
            'cachePath' => $this->cachePath
        ));
    }
}
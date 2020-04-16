<?php
namespace panrus\infinitescroll;

use yii\web\AssetBundle;

class InfiniteScrollAsset extends AssetBundle
{
    public $sourcePath = '@vendor/panrus/yii2-infinite-scroll/assets';
    public $js = [
        'jquery.infinitescroll.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

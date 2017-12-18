<?php
namespace noam148\imagemanager\assets;
use yii\web\AssetBundle;

/**
 * ImageManagerAsset.
 */
class ImageManagerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/noam148/yii2-image-manager/assets/source';
    public $css = [
		'css/font-awesome-4.6.3.min.css',
    ];
    /*public $js = [
        'js/script.imagemanager.input.js',
    ];
    public $depends = [
		'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];*/
}

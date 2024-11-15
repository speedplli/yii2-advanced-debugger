<?php

namespace samman\debug;

use yii\web\AssetBundle;

class AdvancedDebuggerAssets extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/samman/yii2-advanced-debugger/src/assets';
    /**
     * {@inheritdoc}
     */
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/vs.min.css',
    ];
    /**
     * {@inheritdoc}
     */
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/languages/json.min.js',
        'js/main.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

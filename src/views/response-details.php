<?php

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use samman\debug\ResponsePanel;
use samman\debug\AdvancedDebuggerAssets;

/**
 * @author Samman <mazenalsmman@gmail.com>
 * @var $panel ResponsePanel
 */
AdvancedDebuggerAssets::register($this);
?>
<div class="container-fluid mt-3">
    <div class="w-100 d-flex justify-content-between">
        <h1>Response</h1>
        <button class="btn btn-info text-light font-weight-bold" id="copy-me">
            Copy
        </button>
    </div>
    <pre>
        <code id="response" class="language-json border rounded"><?= Html::encode(Json::encode($panel->data['response']->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) ?></code>
    </pre>
</div>

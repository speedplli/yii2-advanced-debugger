<?php

use yii\web\View;
use yii\helpers\Html;
use samman\debug\CurlPanel;
use samman\debug\AdvancedDebuggerAssets;

/**
 * @author Samman <mazenalsmman@gmail.com>
 * @var $panel CurlPanel
 */
$data = $panel->data;
$method = $data['method'];
$headers = $data['headers'];
$url = $data['url'];
$body = $data['body'];
$headers_str = '';
foreach ($headers as $header_key => $header_values) {
    foreach ($header_values as $header_value) {
        $keyValue = escapeshellarg("{$header_key}: {$header_value}");
        $headers_str .= "-H {$keyValue} \\\n";
    }
}
$curl = "curl -X $method '{$url}' \\\n{$headers_str}-d " . escapeshellarg($body);

AdvancedDebuggerAssets::register($this);
?>
<div class="container-fluid mt-3">
    <div class="d-flex justify-content-between">
        <h1>CURL Request</h1>

        <button class="btn btn-info text-light" id="copy-me">
            Copy
        </button>
    </div>
    <pre>
        <code class="language-bash border rounded" id="curl"><?= Html::encode($curl) ?></code>
    </pre>
</div>

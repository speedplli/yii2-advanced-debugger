<?php

namespace samman\debug;

use Yii;
use yii\debug\Panel;
use yii\web\Application;

/**
 * Generates cURL command strings for HTTP requests
 * @author Samman <mazenalsmman@gmail.com>
 * @since 2.0.0
 */
class CurlPanel extends Panel
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Curl';
    }

    /**
     * {@inheritdoc}
     */
    public function getSummary(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getDetail(): string
    {
        return Yii::$app->view->renderFile(__DIR__ . '/views/curl-details.php', ['panel' => $this]);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        if (!Yii::$app instanceof Application) return [];
        $request = Yii::$app->request;

        return [
            'url' => $request->absoluteUrl,
            'body' => $request->rawBody,
            'method' => $request->method,
            'headers' => $request->headers,
        ];
    }
}

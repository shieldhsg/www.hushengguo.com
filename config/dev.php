<?php
$params = require(__DIR__ . '/params.php');

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'www.hushengguo.com',
    'basePath' => dirname(__DIR__),
    'timeZone' => 'Asia/Shanghai',
    'language' => 'zh-cn',
    'charset' => 'utf-8',
    'components' => [

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //路由规则配置
            'rules' => require(__DIR__ . '/url-rules.php')
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'logFile' => '@app/runtime/logs/dev.log',
                ]
            ],
        ],
    ],
    //模块配置
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
],
    'params' => $params,
];

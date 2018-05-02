<?php
error_reporting(E_ALL^E_NOTICE);
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../hsg.vendor/vendor/autoload.php');
require(__DIR__ . '/../../hsg.vendor/vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/dev.php');


(new yii\web\Application($config))->run();

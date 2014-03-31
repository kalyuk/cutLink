<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = __DIR__ . '/../application/configuration.php';

define('PUBLIC_PATH', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('RUNTIME', __DIR__ . '/../runtime');
define('IMAGES', __DIR__ . '/images');
define('VENDORS', __DIR__ . '/../vendor');

define('YII_DEBUG', true);

require_once(VENDORS . '/autoload.php');
require_once(VENDORS . '/yiisoft/yii/framework/yii.php');

Yii::setPathOfAlias('application', __DIR__ . '/../application');
Yii::setPathOfAlias('public', __DIR__ . '/../public');
Yii::setPathOfAlias('vendor', __DIR__ . '/../vendor');

$app = Yii::createWebApplication($config);
$app->run();


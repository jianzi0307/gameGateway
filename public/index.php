<?php
require '../vendor/autoload.php';

use application\libs\Config;

require __DIR__ .'/../application/configs/config.php';

//开发模式或者线上模式
$app = new \Slim\App(Config::read('slim_config'));

require __DIR__ . '/../application/configs/dependencies.php';
require __DIR__ . '/../application/configs/middleware.php';

$app->run();

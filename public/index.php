<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

require '../vendor/autoload.php';

use libs\Config;

require __DIR__ .'/../application/configs/config.php';

//开发模式或者线上模式
$app = new \Slim\App(Config::read('slim_config'));

require __DIR__ . '/../application/configs/dependencies.php';
require __DIR__ . '/../application/configs/middleware.php';
require __DIR__ .'/../application/configs/routes.php';

$routers = glob(__DIR__."/../application/routes/*.router.php");
foreach ($routers as $router) {
    require_once $router;
}
$app->run();

<?php
//自动加载路由设置
$routers = glob(__DIR__. '/../routes/*.router.php');
foreach ($routers as $router) {
    require_once $router;
}


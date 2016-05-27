<?php
/**
 * Created by PhpStorm.
 * User: jian0307@icloud.com
 * Date: 2016/5/26
 * Time: 15:11
 */
require_once __DIR__ . '/../libs/Config.class.php';

//应用配置
$app_config = array(
    'app.appid' => 1105344749,
    'app.appkey' => 'nnF1KA3vOSFaUmQl',
    'app.server_name' => '119.147.19.43',
    'app.game_site' => 'http://www.752g.com',
    'app.game_server_url' => 's14.app1105344749.qqopenapp.com',
    'app.platform_login_key' => '6c517e87a0295858314b8d7fdcfadcd3',
    'app.platform_exchange_key' => '57256ec1110fed1a20a9e9a8663d3752'
);
\application\libs\Config::write('app_config', $app_config);

//数据库配置
$db_config = array(
    'db.host' => 'localhost',
    'db.port' => '3306',
    'db.dbname' => 'ucenter',
    'db.user' => 'root',
    'db.password' => ''
);
\application\libs\Config::writeAry($db_config);

//Slim配置
$slim_config = [
    'settings' => [
        'displayErrorDetails' => true,
        // Renderer settings
        'renderer' => [
            'template_path' => '../application/templates/',
            'cache_path' => '../application/cache/'
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-app-qq-openapi',
            'path' => '../application/logs/qq-openapi-'.date('Y-m-d').'.log',
        ],
    ],
];
\application\libs\Config::write('slim_config', $slim_config);

<?php
/**
 * Created by PhpStorm.
 * User: jian0307@icloud.com
 * Date: 2016/5/26
 * Time: 15:11
 */
use application\libs\Config;

//数据库配置
$db_config = array(
    'db.host' => 'localhost',
    'db.port' => '3306',
    'db.dbname' => 'ucenter',
    'db.user' => 'root',
    'db.password' => ''
);
Config::writeAry($db_config);

//日志配置
$logs_config = array(
    'log.root' => '/log/seaslog',
    'log.path' => 'qq',
);
Config::writeAry($logs_config);

if (extension_loaded('SeasLog')) {
    \SeasLog::setBasePath(Config::read('log.root'));
    \SeasLog::setLogger(Config::read('log.path'));
}

//Slim配置
$slim_config = [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../application/templates/',
            'cache_path' => __DIR__ . '/../application/cache/'
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../application/logs/app.log',
        ],
    ],
];
Config::write('slim_config', $slim_config);

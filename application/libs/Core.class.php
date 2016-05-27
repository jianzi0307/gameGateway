<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/26
 * Time: 15:16
 */
namespace libs;

use PDO;

/**
 * 核心类
 * @package application\libs
 */
class Core
{
    public $orm;
    public $pdo;
    private static $instance;

    private function __construct()
    {
        $dsn = 'mysql:host='. Config::read('db.host').
            ';dbname=' . Config::read('db.dbname') .
            ';port=' . Config::read('db.port') .
            ';connect_timeout=15;charset=utf8';
        $user = Config::read('db.user');
        $password = Config::read('db.password');
        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->orm = new \NotORM($this->pdo);
        $this->orm->debug = true;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: jian0307@icloud.com
 * Date: 2016/5/26
 * Time: 15:12
 */
namespace libs;

/**
 * 配置类
 * @package application\libs
 */
class Config
{
    static $confArray = array();

    /**
     * 读配置
     * @param $key
     * @return mixed
     */
    public static function read($key)
    {
        return self::$confArray[$key];
    }

    /**
     * 获取配置数据
     */
    public static function readAry()
    {
        return self::$confArray;
    }

    /**
     * 写配置
     * @param $key
     * @param $value
     */
    public static function write($key, $value)
    {
        self::$confArray[$key] = $value;
    }

    /**
     * 写入数组
     * @param $configs
     */
    public static function writeAry($configs)
    {
        foreach ($configs as $key => $value) {
            self::write($key, $value);
        }
    }
}

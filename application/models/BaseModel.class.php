<?php
namespace application\models;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/27
 * Time: 14:20
 */

use application\libs\Core;

class BaseModel
{
    protected $orm;

    function __construct()
    {
        $this->orm = Core::getInstance()->orm;
    }
}
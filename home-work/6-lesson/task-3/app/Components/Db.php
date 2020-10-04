<?php

namespace Yana22051994\Components;

use PDO;

/**
 * Класс конектор с БД
 * Class Db
 * @package components
 */
class Db
{
    static $connect = null;


    public static function getConnection()
    {
        //PDO
        if (self::$connect === null) {
            self::$connect = new PDO('mysql:dbname=migrations;host=127.0.0.1', 'root', '');
            self::$connect->exec("set names utf8");
        }

        return self::$connect;
    }

}

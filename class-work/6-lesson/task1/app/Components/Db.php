<?php

namespace App\Components;

use PDO;

/**
 * Класс конектор с БД
 * Class Db
 * @package components
 */
class Db
{
    /**
     * @var null
     */
    static $connect = null;

    /**
     * @return PDO|null
     */
    public static function getConnection()
    {
        include('./config/db.php');

        //PDO
        if (self::$connect === null) {
            self::$connect = new PDO(sprintf("mysql:host=%s; dbname=%s", DB_HOST,DB_DATABASE), DB_USERNAME, DB_PASSWORD);
            self::$connect->exec("set names utf8");
        }

        return self::$connect;
    }

}

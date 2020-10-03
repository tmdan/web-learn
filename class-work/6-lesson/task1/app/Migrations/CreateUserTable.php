<?php

namespace App\Migrations;

use App\Components\Migration;


class CreateUserTable extends Migration
{

    public static function up()
    {
        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE user (" .
            "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY," .
            "firstname VARCHAR(30) NOT NULL," .
            "lastname VARCHAR(30) NOT NULL," .
            "email VARCHAR(50)" .
            ")";

        //Удаляем существующую таблицу с бд
        //if($instance->tableExist('user')) $instance->deleteTable('user');

        //Пытаемся создать таблцу
        if ($instance->con->query($sql)) {
            //Если запрос вернул true - Значит таблица создалась, выводим сообщение об успешном создании таблицы в консоль
            echo "Table user created successfully"."\n";
        } else {
            //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo который возращает нам массив, берем 3 ячейку массива где содержиться сообщение об ошибки и выводим ее
            echo $instance->con->errorInfo()[2]."\n";
        }

    }
}

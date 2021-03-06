<?php

namespace Yana22051994\Migrations;

use Yana22051994\Components\Migration;


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

               //Пытаемся создать таблцу
        if ($instance->con->query($sql)) {
            echo "Table user created successfully"."\n";
        } else {
            //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo который возращает нам массив, берем 3 ячейку массива где содержиться сообщение об ошибки и выводим ее
            echo $instance->con->errorInfo()[2]."\n";
        }

    }
}

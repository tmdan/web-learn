<?php

namespace Yana22051994\Migrations;

use Yana22051994\Components\Migration;

class CreateProductTable extends Migration
{
    public static function up()
    {
        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE product (".
                "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
                "firstname VARCHAR(30) NOT NULL,".
                "lastname VARCHAR(30) NOT NULL,".
                "email VARCHAR(50)".
                ")";

        //Удаляем существующую таблицу с бд
        if($instance->tableExist('product')) {
            $instance->deleteTable('product');
            $instance->con->query($sql);
            echo "Table 'product' deleted and created successfully" . "\n";
        }
    }
}

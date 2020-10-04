<?php


namespace App\Migrations;

use App\Components\Migration;

class CreateOrderTable extends Migration
{
    public static function up()
    {
        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE order (".
            "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
            "order_date date NOT NULL,".
            "total_price VARCHAR(30) NOT NULL,".
            ")";

        //Удаляем существующую таблицу с бд
        if($instance->tableExist('order')) {
            $instance->deleteTable('order');
            $instance->con->query($sql);
            echo "Table 'order' deleted and created successfully" . "\n";
        }
    }
}
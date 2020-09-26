<?php


$pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
//var_dump($pdo);


$table = 'my_users';
$ok = $pdo->prepare("SHOW TABLES LIKE :table;");
$ok->bindParam(":table", $table, PDO::PARAM_STR);

$check = $ok->execute();
//var_dump($check);

$count = $ok->rowCount($check);
var_dump($count);



$new_table = trim($table, '\'');
if ($count > 0)
{
    $del = $pdo->prepare("DROP TABLE :table;");
    $del->bindParam(":table", $new_table, PDO::PARAM_STR);
    $delete = $del->execute();
    var_dump($delete);

    $sql_create = "CREATE TABLE my_users (Id smallint PRIMARY KEY AUTO_INCREMENT NOT NULL, firstname  Varchar(255) NOT NULL, lastname  Varchar(255) NULL, email  Varchar(20) NULL);";
    $pdo->query($sql_create);
}
else
    {
        $sql_create = "CREATE TABLE my_users (Id smallint PRIMARY KEY AUTO_INCREMENT NOT NULL, firstname  Varchar(255) NOT NULL, lastname  Varchar(255) NULL, email  Varchar(20) NULL);";
        $pdo->query($sql_create);
    }
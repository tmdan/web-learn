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
    $del = $pdo->query("DROP TABLE my_users;");

    $sql_create = "CREATE TABLE my_users (Id smallint PRIMARY KEY AUTO_INCREMENT NOT NULL, firstname  Varchar(255) NOT NULL, lastname  Varchar(255) NULL, email  Varchar(20) NULL);";
    $pdo->query($sql_create);
    $sql_insert = "INSERT INTO my_users (`firstname`, `lastname`, `email`) VALUES ('Мухаммед', 'Абдуллаев', 'muhammed@mail.ru')";
    $pdo->query($sql_insert);
}
else
    {
        $sql_create = "CREATE TABLE my_users (Id smallint PRIMARY KEY AUTO_INCREMENT NOT NULL, firstname  Varchar(255) NOT NULL, lastname  Varchar(255) NULL, email  Varchar(20) NULL);";
        $pdo->query($sql_create);
        $sql_insert = "INSERT INTO my_users (`firstname`, `lastname`, `email`) VALUES ('Яна', 'Николаенко', 'yana@mail.ru')";
        $pdo->query($sql_insert);
    }
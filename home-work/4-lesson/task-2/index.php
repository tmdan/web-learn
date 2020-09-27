<?php


$pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
//var_dump($pdo);

$table = 'my_users';
$new_table = trim($table, '\'');
$firstname = 'Yana';
$lastname = 'Nikolaenko';
$email = 'yana@mail.ru';


$ok=$pdo->prepare("INSERT INTO my_users (`firstname`, `lastname`, `email`) VALUES (:firstname, :lastname, :email);");
//$ok->bindParam(':table', $new_table, PDO::PARAM_STR);
$ok->bindParam(':firstname', $firstname, PDO::PARAM_STR);
$ok->bindParam(':lastname', $lastname, PDO::PARAM_STR);
$ok->bindParam(':email', $email, PDO::PARAM_STR);

$ok->execute();
var_dump($ok);


$sql = "SELECT * FROM my_users;";
$k = $pdo->query($sql);

$users = $k->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user)
{
    echo $user['firstname'] . ' ' . $user['lastname'] . ' - ' . $user['email'] . '<br>';
}
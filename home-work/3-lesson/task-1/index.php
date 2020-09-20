<?php


setcookie('new_user', 'я уже не новичок', time() + 864000);
if (isset($_COOKIE['new_user']))

{
    echo 'С возвращением, дружище!';
}
else
{
    echo 'Добро пожаловать, новичок!';
}



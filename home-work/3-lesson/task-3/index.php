<?php

if (isset($_COOKIE['new_user']))
{
    $count = $_COOKIE['new_user'];
    $count++;
    setcookie('new_user', $count);
    echo "Пользователь заходил на страницу $count раз";
}
else
{
    $count = 1;
    setcookie('new_user', $count);
    echo "Пользователь заходил на страницу $count раз";
}
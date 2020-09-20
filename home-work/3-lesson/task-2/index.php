<?php


setcookie('new_user', date('Y-m-d h:i:s'));

echo "Сейчас date('Y-m-d h:i:s') и я зашел впервые";

if (isset($_COOKIE['new_user']))
{
    echo $_COOKIE['new_user'];
}
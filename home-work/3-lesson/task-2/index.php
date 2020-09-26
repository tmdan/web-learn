<?php


if (isset($_COOKIE['new_user']))
{
    $last = $_COOKIE['new_user'];
    setcookie('new_user', date('Y-m-d h:i:s'));
    echo "Прошлый раз я заходил $last, а сейчас " . date('Y-m-d h:i:s');

}
else {
    setcookie('new_user', date('Y-m-d h:i:s'));
    $now = date('Y-m-d h:i:s');
    echo "Сейчас " . $now . " и я зашел впервые";
}
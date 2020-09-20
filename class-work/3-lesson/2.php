<?php


if (!empty($_COOKIE['USER_ID'])){
    var_dump("Авторизирован");
}else{
    var_dump("Не авторизиван");
}


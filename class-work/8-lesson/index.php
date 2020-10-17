<?php

$str="He and She and me together meet in the club and drink coffee and eat cookie. It's 20 cost";
$str2="me";
$str1="hello2work";
$str3="hello245work";
$str4="hellowork";



preg_match("/^[a-z\*=\+]*[2]{1,1}[a-z]*$/", $str1,$matches);

xdebug_var_dump($matches);
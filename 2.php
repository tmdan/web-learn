<?php
    session_start();


    if(isset($_SESSION['auth'])){
        echo "Секректный текст";
    }else{
        echo "Обычный текст";
    }



?>

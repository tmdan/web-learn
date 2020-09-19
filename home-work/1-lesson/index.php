<?php

if(!empty($_POST) && $_POST['username']='Яна' && $_POST['password']='123'){
    header("HTTP/1.0 202");
    var_dump ($_POST);
}


else if (!empty($_POST) && $_POST['username']='Яна' && $_POST['password']='456')
{
    header("HTTP/1.0 201");
    header('Content-Type: application/mp3');
    header('Content-Disposition: attachment; filename="music.mp3"');
    readfile('original.mp3');
}


else if (!empty($_POST) && $_POST['username']='Яна' && $_POST['password']='789'){
    header("HTTP/1.0 302 Вы перенаправлены на другую страницу");
    header('Location: http://www.google.com/');
}


else if (!empty($_POST) && $_POST['username']='Яна' && $_POST['password']='000'){
    header("HTTP/1.0 204");
    echo "Вы авторизованы";
}

?>



<html>
<body>
<form action="/myhttp" method="post">
    <label for="lname">User name:</label><br>
    <input type="text" id="username" name="username" value=""><br><br>
    <label for="lname">Password:</label><br>
    <input type="password" id="password" name="password" ><br><br>
    <input type="submit" value="Submit">
</form>
</body>
<html>

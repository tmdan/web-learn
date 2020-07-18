<?php

session_start();

if (
    isset($_POST['submit']) &&
    !empty($_POST) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    $_POST['username'] == 'Яна' &&
    $_POST['password'] == '123'
) {

    $_SESSION['auth'] = true;
    header('Location: 2.php');

} else if (
    isset($_POST['submit'])
) {
    echo "Идите на";
}


?>


<html>
<body>


<form action="/" method="post">
    <label for="lname">User name:</label><br>
    <input type="text" id="lname" name="username"><br><br>
    <label for="lname">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>


</body>
<html>

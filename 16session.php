<?php

session_start();
ini_set('session.gc.maxlifetime', +10);

include "connection.php";
$connection = new PDO("$bdInfo", "$bdUser", "$bdPass");

$login = $connection->query('SELECT * FROM `users_stena`');

if ($_POST['login'])
{
    foreach ($login as $log)
    {
        if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password'])
        {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: 17session_content.php');
        }
        else
        {
            echo 'Пользователь с таким логином и паролем не найден';
        }
    }
}


?>

<form method="POST">
    <input type="text" name="login" required placeholder="LOGIN">
    <input type="text" name="password" required placeholder="PASSWORD">
    <input type="submit">
</form>

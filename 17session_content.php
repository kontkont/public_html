<?php

session_start();
ini_set('session.gc.maxlifetime', +3600);

if (!$_SESSION['login'] || !$_SESSION['password'])
{
    header('Location: 16session.php');
    exit;
}

if ($_POST['unlogin'])
{
    session_destroy();
    header('Location: 16session.php');
    exit;
}

echo " Привет {$_SESSION['login']} !"
?>

<p>Страница только для авторизированных пользователей</p>

<form method="POST">
    <input type="submit" name="unlogin" value="На страницу логина">
</form>

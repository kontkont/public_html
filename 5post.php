
<?php

if (isset($_POST['username'])) {
    echo 'Привет ' . $_POST['username'] . '!';
    exit;
}

?>

<p>Введите свое имя </p>
<form action="" method="post">
    <input type="text" name="username">
    <input type="submit">
</form>

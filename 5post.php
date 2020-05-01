
<?php

if (!empty($_POST['name']) and !empty($_POST['surname']))
{
    echo 'Привет ' . $_POST['surname'] . ' ' . $_POST['name'] . '!';
    echo '<form method="post" action="">
            <input type="text" name="name">
            <input type="text" name="surname">
              <button type="submit">Все поменять</button>
          </form>';
    exit;
}

?>

<table><tr><td>
<form method="post" action="">
    <p>Введите имя:</p>
    <input type="text" name="name">
    </td><td>
    <p>Введите фамилию:</p>
    <input type="text" name="surname">
    </td><td>
    <button type="submit">Отправить данные</button>
</form>
</td></tr></table>

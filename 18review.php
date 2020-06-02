<table><tr><td>
<form method="POST">
    <input type="text" name="login" placeholder="Имя" required><br>
    <input type="text" name="comment" placeholder="Комментарий" required><br>
    <input type="submit" value="Отправить"><br>
</form>
</td><td>
<form method="POST">
    <input type="submit" name="update" value="Обновить">
</form>
        </td></tr></table>
<p>Комментарии прошедшие модерацию: </p>

<?php

include_once 'connection.php';
$connection = new PDO("$bdInfo", "$bdUser", "$bdPass");

$login = $_POST['login'];
$comment = $_POST['comment'];

if ($login) {
    $connection->query("INSERT INTO forum_comm
                                 SET login = '$login', comment = '$comment'");
    header('Location: 21forum.php');
}

$showOkComment = $connection->query("SELECT * FROM forum_comm
                                            WHERE moderation = 'ok'
                                            ORDER BY id DESC ");
$showOkComment = $showOkComment->fetchAll();

?>

<?php foreach ($showOkComment as $com) { ?>
    <form method="POST">
        <input type="submit" name="<?=$com['id']?>" id="<?=$com['id']?>" value="На редактирование">
        <label for="<?=$com['id']?>">
            <?php echo " {$com['login']}: {$com['comment']} <br><br>" ?>
        </label>
    </form>
<?php } ?>

<?php

foreach ($_POST as $key=>$value) {
    if ($_POST["$key"])
    {
        $connection->query("UPDATE `forum_comm` SET moderation = 'rejected' 
                                     WHERE id = '$key' ");
        header('Location: 21forum.php');
    }
}

if ($_POST['update'])
{
    header('Location: 21forum.php');
}

?>
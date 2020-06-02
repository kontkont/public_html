<p>Комментарии не прошедшие модерацию: </p>

<?php

include_once 'connection.php';
$connection = new PDO("$bdInfo", "$bdUser", "$bdPass");

$showNewComment = $connection->query("SELECT * FROM forum_comm
                                            WHERE moderation = 'new'
                                            ORDER BY id DESC ");
$showNewComment = $showNewComment->fetchAll();

?>

<form method="POST">
    <?php foreach ($showNewComment as $com) { ?>
    <select name="<?=$com['id']?>" id="<?=$com['id']?>">
        <option value="ok">Опубликовать</option>
        <option value="rejected">На исправление</option>
    </select>
    <label for="<?=$com['id']?>">
        <?php echo " {$com['login']}: {$com['comment']} <br><br>" ?>
    </label>
    <?php } ?>
    <button>Moderation</button>
</form>

<?php

foreach ($_POST as $key=>$value)
{
    if ($value == 'ok')
    {
        $connection->query("UPDATE `forum_comm` SET moderation = 'ok' 
                                     WHERE id = '$key' ");
        header('Location: 21forum.php');
    }
    else
    {
        $connection->query("UPDATE `forum_comm` SET moderation = 'rejected' 
                                     WHERE id = '$key' ");
        header('Location: 21forum.php');
    }
}

?>
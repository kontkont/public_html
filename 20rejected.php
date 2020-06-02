<p>Комментарии с нарушениями для редактирования: </p>

<?php

include_once 'connection.php';
$connection = new PDO("$bdInfo", "$bdUser", "$bdPass");

$showRejectedComment = $connection->query("SELECT * FROM forum_comm
                                            WHERE moderation = 'rejected'
                                            ORDER BY id DESC ");
$showRejectedComment = $showRejectedComment->fetchAll();

?>

<form method="POST">
    <?php foreach ($showRejectedComment as $com) { ?>
            <input type="text" name="<?=$com['id']?>" id="<?=$com['id']?>"  required>
        <label for="<?=$com['id']?>">
            <?php echo " {$com['login']}: {$com['comment']} <br><br>" ?>
        </label>
    <?php } ?>
    <input type="submit" name="changed" value="Редактировать">
</form>

<?php

foreach ($_POST as $key=>$value) {
    if ($_POST['changed'])
    {
        $connection->query("UPDATE `forum_comm` SET moderation = 'new', comment = '$value'  
                                     WHERE id = '$key' ");
        header('Location: 21forum.php');
    }
}

?>
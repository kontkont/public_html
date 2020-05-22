<?php
include("connection.php");
$connection = new PDO("$bdInfo", "$bdUser", "$bdPass");

if ($_POST['comment']) {

    //Вот тут отключил запись комментариев
    //$newComment=$_POST['comment'];
    //$connection->query("INSERT INTO comments (comment) VALUE ('$newComment')");

    $allComments = $connection->query("SELECT * FROM comments");
    $allComments = $allComments->fetchAll();
    $allComments = array_reverse ($allComments);

    foreach ($allComments as $com)
    {
        echo '<div class="blockLeft">' . $com['comment'] . '</div>';
    }
} else {
    $allComments = $connection->query("SELECT * FROM comments");
    $allComments = $allComments->fetchAll();
    $allComments = array_reverse ($allComments);

    foreach ($allComments as $com)
    {
        echo '<div class="blockLeft">' . $com['comment'] . '</div>';
    }
}

?>
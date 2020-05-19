<?php
$connection = new PDO ('mysql:host=localhost; dbname=a0263496_lesson1; charser=utf8',
    'a0263496_lesson1', '123');

if ($_POST['comment']) {
    $newComment=$_POST['comment'];
    $connection->query("INSERT INTO comments (comment) VALUE ('$newComment')");

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
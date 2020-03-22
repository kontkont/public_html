<?php

$name = $_POST['user1'];
$surname = $_POST['user2'];

function SayHallo($a, $b)
{
    print "Hello, $a $b !";
}

SayHallo($name, $surname);
?>

<br>
<a href="1post.php">RETURN</a>
<br>
<a href="/index.php">MAIN MENU</a>
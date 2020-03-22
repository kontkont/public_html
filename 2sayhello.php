<?php

$a = $_POST['user1'];
$b = $_POST['user2'];

function SayHallo($name, $surname)
{
    print "Hello, $name $surname !";
}

SayHallo($a, $b);
SayHallo($a, $b);
?>

<br>
<a href="1post.php">RETURN</a>
<br>
<a href="/index.php">MAIN MENU</a>
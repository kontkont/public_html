<?php

foreach (glob("*.*") as $filename) {
    echo "$filename размер " . filesize($filename) . "<br>";
}

?>

<br>
<a href="/index.php">MAIN MENU</a>

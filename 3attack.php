<form method="post">
    <input type="button" name="my_button" value="Атаковать">
</form>

<?php

if( isset( $_POST['my_button'] ) )
    {
        header ("4pvp.php");
    }

?>
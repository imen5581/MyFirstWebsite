<?php

if (($_REQUEST['name'] == "") || $_REQUEST['email'] == "")
    header("Location:sorry.php");
 else
        header("Location:thanks.php");


?>

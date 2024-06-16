<?php
    if (isset($_REQUEST['submit'])) {
        $age = strip_tags($_REQUEST['age']);
        $name = strip_tags($_REQUEST['name']);
        $message = strip_tags($_REQUEST['message']);
        echo "Привет, $name, $age<br>Твое сообщение:<br>$message";
    }
?>
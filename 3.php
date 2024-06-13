<?php
    if (isset($_GET['submit'])) {
        $age = strip_tags($_GET['age']);
        $name = strip_tags($_GET['name']);
        $message = strip_tags($_GET['message']);
        echo "Привет, $name, $age\n$message";
    }
?>
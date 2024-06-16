<?php
if(isset($_REQUEST['age'])){
    $age = strip_tags($_REQUEST['age']);
    echo "Ваш возраст: $age";
}
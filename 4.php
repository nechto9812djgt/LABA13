<?php
    $login = 'popkich';
    $pswr = '123';
    $Login = trim($_REQUEST['login']);
    $Pswr = trim($_REQUEST['pswr']);
    if ($login == $Login and $pswr == $Pswr) {
        echo "Доступ разрешен!";
    }
    else {
        echo "Доступ запрещен!";
    }
?>
<?php
    $login = 'popkich';
    $pswr = '82475982759';
    $Login = trim($_GET['login']);
    $Pswr = trim($_GET['pswr']);
    if ($login == $Login and $pswr == $Pswr) {
        echo "Доступ разрешен!";
    }
    else {
        echo "Доступ запрещен!";
    }
?>
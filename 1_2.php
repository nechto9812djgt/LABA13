<?php
if (isset($_REQUEST['city'])){
    $city = strip_tags($_GET["city"]);
    echo "Ваш город: $city";
}
?>
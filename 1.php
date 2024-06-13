<?php
    $city = $_GET["city"];
    echo 'Ваш город: '.$city;
?>
<?php
    $city = strip_tags($_GET["city"]);
    echo "Ваш город: $city";
?>


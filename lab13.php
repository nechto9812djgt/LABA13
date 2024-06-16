<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-9</title>
</head>
<body>
    <!--1-->
    <form action="1.php" method="GET">
        <input type="text" name="city">
        <button type="submit">Отправить</button>
    </form>
    <!--2--><br>
    <form action="1_2.php" method="GET">
        <input type="text" name="city">
        <button type="submit">Отправить</button>
    </form>
    <!--3--><br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    } else {
        ?>
        <form action="1_2.php" method="GET">
            <input type="text" name="city">
            <button type="submit">Отправить</button>
        </form>
        <?php
    }
    ?>
    <!--4--><br>
    <form action="2.php" method="GET">
        <input type="text" name="name">
        <button type="submit">Отправить</button>
    </form>
    <!--5--><br>
    <form action="3.php" method="GET">
        <input type="text" name="name"><br>
        <input type="number" name="age"><br>
        <textarea name="message"></textarea><br>
        <button type="submit" name="submit">Отправить</button>
    </form>
    <!--6--><br>
    <?php
    if (!isset($_REQUEST['age'])) {
    ?>
    <form action="3_2.php" method="GET">
        <input type="number" name="age">
        <button type="submit">Отправить</button>
    </form>
    <?php
    }
    ?>
    <!--7--><br>
    <form action="4.php" method="GET">
            <input type="text" name="login">
            <input type="password" name="pswr">
        <button type="submit">Отправить</button>
    </form>
    <!--8--><br>
    <form action="5.php" method="GET">
        <input name="name" value="<?php if (isset($_GET['name']))
            echo $_GET['name'];
        ?>">
        <button type="submit">Отправить</button>
    </form>
    <!--9--><br>
    <form action="5.php" method="GET">
        <input name="name" value="<?php if (isset($_GET['name']))
            echo $_GET['name'];
        ?>">
        <textarea name="message">
            <?php
                if (isset($_GET['message'])) {
                    echo $_GET['message'];
                }
            ?>
        </textarea>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
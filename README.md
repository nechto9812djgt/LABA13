<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="font-family: 'Times New Roman', Times, serif;">
    <p align = "center" style="font-size: 14;">
        МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ <br>
        РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
        ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ<br>
        ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ<br>
        «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»<br>
    </p>
    <br><br><br><br><br><br>
    <body font-size = "12">
        <p align = "center"> 
            Институт естественных наук и техносферной безопасности<br>
            Кафедра информатики<br>
            Бахтина Елена Владимировна<br>
        </p>
        <br><br><br>
        <p align = "center">
            <strong>Лабораторная работа №13. «PHP».</strong><br>
            01.03.02 Прикладная математика и информатика
        </p>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <p align = "right"> 
            Научный руководитель<br>
            Соболев Евгений Игоревич
        </p>
        <br><br><br>
        <p align = "center">г. Южно-Сахалинск<br>2024 г.</p>
    </body>
    <body style="font-family: 'Times New Roman', Times, serif;">
        <h2 align = "center">Введение</h2>
        <p font-size = "12">
            <b>PHP</b> — C-подобный скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений.
        </p>
        <br>
        <h2 align = "center">Цель и задачи</h2>
        <p align = "left" font-size = "12"> 
            Цель: решить задачи при помощи JS.<br>
            Задачи:<br>
                1.	Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.<br>
                2.	Решите предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать сайт.<br>
                3.	Сделайте так, чтобы форма после отправки скрывалась.<br>
                4.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.<br>
                5.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.<br>
                6.	Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее.<br>
                7.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.<br>
                8.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.<br>
                9.	Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали.<br>
                10.	Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.<br>
                11.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.<br>
                12.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca. Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'. <br>
                13.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'. <br>
                14.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'. <br>
                15.	Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз. <br>
                16.	Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные. <br>
                17.	 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные. <br>
                18.	 Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество). <br>
                19.	 Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные. <br>
                20.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные. <br>
                21.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные. <br>
                22.	Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a). <br>
        </p>
        <h2 align = "center">Решение</h2>
        <p font-size = "12">Для выполнения этой лабораторной работы, я пользовалась:</p>
        <p> 1.  Материалом в сети интернет</p>
        </body>
<h3 align = "center">Файл lab13.html</h3>

```
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
```
<h3 align = "center">Файл 1.php</h3>

```
<?php
    $city = $_GET["city"];
    echo 'Ваш город: '.$city;
?>
```
<h3 align = "center">Файл 1_2.php</h3>

```
<?php
    $city = strip_tags($_GET["city"]);
    echo "Ваш город: $city";
?>
```
<h3 align = "center">Файл 2.php</h3>

```
<?php
    $name = $_GET['name'];
    echo "Привет, $name";
?>
```
<h3 align = "center">Файл 3.php</h3>

```
<?php
    if (isset($_REQUEST['submit'])) {
        $age = strip_tags($_REQUEST['age']);
        $name = strip_tags($_REQUEST['name']);
        $message = strip_tags($_REQUEST['message']);
        echo "Привет, $name, $age<br>Твое сообщение:<br>$message";
    }
?>
```
<h3 align = "center">Файл 3_2.php</h3>

```
<?php
if(isset($_REQUEST['age'])){
    $age = strip_tags($_REQUEST['age']);
    echo "Ваш возраст: $age";
}
```
<h3 align = "center">Файл 4.php</h3>

```
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
```
<h3 align = "center">Файл 5.php</h3>

```
<?php
    $name = $_REQUEST['name'];
    echo $name;
?>
```
<h3 align = "center">Файл regular.php</h3>

```
//https://www.programiz.com/php/online-compiler/
10.	Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.
<?php
    $pattern = '/a.b/';
    $str = "ahb acb aeb aeeb adcb axeb";
    preg_match_all($pattern, $str, $matches);
    print_r($matches);
?>
11.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.
<?php
    $pattern = '/a..a/';
    $str = "aba aca aea abba adca abea";
    preg_match_all($pattern, $str, $matches);
    print_r($matches);
?>
12.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca. Дана строка 'aa aba abba abbba abca abea'.
Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'.
<?php
    $pattern1 = '/ab.a/';
    $str1 = "aba aca aea abba adca abea";
    preg_match_all($pattern1, $str1, $matches1);
    $pattern2 = '/ab+a/';
    $str2 = "aa aba abba abbba abca abea";
    preg_match_all($pattern2, $str2, $matches2);
    print_r($matches1);
    print_r($matches2);
?>
13.	 Дана строка 'aa aba abba abbba abca abea'.
Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'. 
<?php
    $str = "aa aba abba abbba abca abea";
    $pattern = '/ab*a/';
    preg_match_all($pattern, $str, $matches);
    print_r($matches);
?>
14.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'. 
<?php
    $str = "aa aba abba abbba abca abea";
    $pattern = '/ab?a/';
    preg_match_all($pattern, $str, $matches);
    print_r($matches);
?>
15.	Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз. 
<?php
    $str = "ab abab abab abababab abea";
    $pattern = '/(ab)+/';
    preg_match_all($pattern, $str, $matches);
    print_r($matches[0]);
?>
16.	Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные. 
<?php
    $str = "a.a aba aea";
    preg_match_all('/a\.a/', $str, $matches);
    print_r($matches);
?>
17.	 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные. 
<?php
    $str = "2+3 223 2223";
    preg_match_all('/2\+3/', $str, $matches);
    print_r($matches);
?>
18.	 Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество). 
<?php
    $str = "23 2+3 2++3 2+++3 345 567";
    preg_match_all('/2(\+)+3/', $str, $matches);
    print_r($matches[0]);
?>
19.	 Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные. 
<?php
    $str = "23 2+3 2++3 2+++3 445 677";
    preg_match_all('/2(\+)*3/', $str, $matches);
    print_r($matches);
?>
20.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные. 
<?php
    $str = "*+ *q+ *qq+ *qqq+ *qqq qqq+";
    preg_match_all('/\*q+\++/', $str, $matches);
    print_r($matches);
?>
21.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные. 
<?php
    $str = "*+ *q+ *qq+ *qqq+ *qqq qqq+";
    preg_match_all('/\*q*\++/', $str, $matches);
    print_r($matches);
?>
22.	Дана строка 'aba accca azzza wwwwa'.
Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a).
<?php
    $str = "aba accca azzza wwwwa";
    $str1 = preg_replace('/(?<=a).(?=a)/', '!', $str);
    print $str1;
?>
```
<h2 align = "center">Результат HTML</h2>
<div style="display: flex; flex-direction: column">
    <p>Исходник</p>
    <img height="350px" width="350px" src="img/1.png">
    <p>Задания 1-3</p>
    <img height="350px" width="600px" src="img/2.png">
    <p>Задание 4</p>
    <img height="350px" width="600px" src="img/3.png">
    <p>Задание 5</p>
    <img height="350px" width="600px"src="img/4.png">
    <p>Задание 6</p>
    <img height="350px" width="600px" src="img/5.png">
    <p>Задание 7, если ввести popkich 123</p>
    <img height="350px" width="600px" src="img/6.png">
    <p>Задание 7, если ввести что-то иное</p>
    <img height="350px" width="600px" src="img/7.png">
    <p>Задания 8,9</p>
    <img height="350px" width="600px" src="img/8.png">
</div>
</html>
<br>
 <h2 align = "center">Вывод</h2>
 <p align = "left" font-size = "12">
    По итогу данной лабороторной работы, я научилась работать с регулярными выражениями на PHP😊 
</p>
</body>
</html>

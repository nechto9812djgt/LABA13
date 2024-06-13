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
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 1 - HomeWork 2</title>
    <style>
        .table-lesson-2 td {
            padding: .1em .5em;
            text-align: center;
        }
        .table-lesson-2 tr:nth-child(even) td {
            background-color: #f0f0f0;
        }

    </style>
</head>
<body>
<h2>1. Таблица истинности</h2>
<table class="table-lesson-2">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>&&</td>
        <td>||</td>
        <td>xor</td>
    </tr>
    <tr>
        <td><?php echo $a = 0; ?></td>
        <td><?php echo $b = 0; ?></td>
        <td><?php echo (int) ($a && $b); ?></td>
        <td><?php echo (int) ($a || $b); ?></td>
        <td><?php echo (int) ($a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php echo $a = 1; ?></td>
        <td><?php echo $b = 0; ?></td>
        <td><?php echo (int) ($a && $b); ?></td>
        <td><?php echo (int) ($a || $b); ?></td>
        <td><?php echo (int) ($a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php echo $a = 0; ?></td>
        <td><?php echo $b = 1; ?></td>
        <td><?php echo (int) ($a && $b); ?></td>
        <td><?php echo (int) ($a || $b); ?></td>
        <td><?php echo (int) ($a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php echo $a = 1; ?></td>
        <td><?php echo $b = 1; ?></td>
        <td><?php echo (int) ($a && $b); ?></td>
        <td><?php echo (int) ($a || $b); ?></td>
        <td><?php echo (int) ($a xor $b); ?></td>
    </tr>
</table>
<h2>2. Решение квадратного уравнения</h2>
<?php

// 2. функция вычисления дискриминанта квадратного уравнения
function calcD($a, $b, $c) {
    return $b ** 2 - 4 * $a * $c;
}
assert(calcD(3, -4, 2) === -8);
assert(calcD(1, -6, 9) === 0);
assert(calcD(1, -4, -5) === 36);

$a = 1;
$b = -4;
$c = -5;
$d = calcD($a, $b, $c);

?>
<h3><?php if($a != 1) echo $a; ?>x<sup>2</sup> - <?php echo $b; ?>x + <?php echo $c; ?> = 0</h3>
<p>a = <?php echo $a; ?>, b = <?php echo $b; ?>, c = <?php echo $c; ?></p>
<p>D = <?php echo $b; ?><sup>2</sup> - 4 * <?php echo $a; ?> * <?php echo $c; ?> = <?php echo $d; ?></p>
<p>
    <strong>Ответ:</strong>
    <?php
    switch(true){
        case($d > 0):
            $k = sqrt($d);
            echo 'x1 = ' . (-$b - $k) / (2 * $a) . ', ';
            echo 'x2 = ' . (-$b + $k) / (2 * $a);
            break;
        case ($d === 0):
            echo 'x = ' . -$b / (2 * $a);
            break;
        case ($d < 0):
            echo 'корней нет';
    }
    ?>
</p>
<h2>3. "Что возвращает оператор include, если его использовать как функцию?"</h2>
<?php

// 3. То, что возвращает подключаемый файл, если исполнение включаемого файл заканчивается return
// успешное включение файла возвращает int(1)
var_dump( include ('include.php') ); // год 2019 int(1)
var_dump( include ('include1.php') ); // string(12) "строка"
var_dump( include ('include2.php') ); // int(2019)
var_dump( include ('include3.php') ); // bool(true)
?>

<h2>4. Функция определения пола по имени</h2>
<?php
// 4
function getSex($name){

    $lastCharName = mb_strtolower(mb_substr($name, -1, 1));

    if ($lastCharName == 'а' || $lastCharName == 'я') {
        return 'женский';
    }
    elseif($lastCharName == 'в' || $lastCharName == 'д' || $lastCharName == 'й' || $lastCharName == 'л' || $lastCharName == 'м' || $lastCharName == 'н' || $lastCharName == 'р' || $lastCharName == 'т') {
        return 'мужской';
    } else {
        return null;
    }
}
assert(getSex('Александр') === 'мужской');
assert(getSex('Александра') === 'женский');
assert(getSex('Fill') === null);

echo getSex('Максим'); // мужской

?>
</body>
</html>



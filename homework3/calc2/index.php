<?php

include __DIR__ . '/functions.php';

$operators = ['+', '-', '*', '/'];

if( isset($_POST['a']) ){
    $a = (int) $_POST['a'];
} else {
    $a = null;
}
if( isset($_POST['b']) ){
    $b = (int) $_POST['b'];
} else {
    $b = null;
}
if( isset($_POST['operator']) ){
    $operator = $_POST['operator'];
} else {
    $operator = null;
}

$result = calculate($a, $b, $operator);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма калькулятора</title>
</head>
<body>
<form action="/homework3/calc2/index.php" method="post">
    <input type="number" name="a" value="<?php echo $a; ?>">
    <select name="operator">
        <?php foreach ($operators as $op){ ?>
            <option value="<?php echo $op; ?>" <?php if($op == $operator) echo 'selected'; ?>><?php echo $op; ?></option>
        <?php } ?>
    </select>
    <input type="number" name="b" value="<?php echo $b; ?>">
    <button type="submit">=</button>
    <?php echo $result; ?>
</form>
</body>
</html>


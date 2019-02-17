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
<form action="/homework3/calc1/calculator.php" method="get">
    <input type="text" name="a">
    <select name="operator">
        <option value="+">+</option>
        <option value="=">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="b">
    <button type="submit">=</button>
</form>
</body>
</html>


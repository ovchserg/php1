<?php

include __DIR__ . '/functions.php';

$posts = getPosts();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<?php foreach ($posts as $post) { ?>
    <p><?php echo $post; ?></p>
<?php } ?>

<h2>Добавление записи</h2>

<form action="/homework4/guestbook/addPost.php" method="post">
    <textarea name="post"></textarea>
    <br>
    <button type="submit">Добавить</button>
</form>

</body>
</html>


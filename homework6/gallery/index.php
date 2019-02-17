<?php

include __DIR__ . '/../classes/Gallery.php';
include __DIR__ . '/../classes/User.php';

session_start();

$gallery = new Gallery;
$user = new User;

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
    <style>
        .image {
            display: inline-block;
        }
        .image img {
            height: 200px;
        }
    </style>
</head>
<body>

    <h1>Фотогалерея</h1>

    <?php foreach ($gallery->images as $key => $image) { ?>
        <div class="image">
            <img src="/homework6/gallery/images/<?php echo $image; ?>">
        </div>
    <?php } ?>

    <?php if ( $user->getCurrentUser() ){ ?>

    <div>
        Привет, <?php echo $_SESSION['username']; ?>! <a href="/homework6/login.php?logout">Выйти</a>
    </div>

    <h2>Загрузить изображение</h2>
    <form action="/homework6/gallery/uploadImage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Загрузить</button>
    </form>

    <?php } else { ?>

    <div>
        Чтобы загрузить изображение, необходимо <a href="/homework6/login.php">авторизоваться</a>
    </div>

    <?php } ?>
</body>
</html>

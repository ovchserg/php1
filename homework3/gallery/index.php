<?php

$images = include __DIR__ . '/images.php';

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
        .image img {
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Фотогалерея</h1>
    <?php foreach ($images as $key => $image) { ?>
        <div class="image">
            <a href="/homework3/gallery/image.php?id=<?php echo $key; ?>">
                <img src="/homework3/gallery/images/<?php echo $image; ?>">
            </a>
        </div>
    <?php } ?>
</body>
</html>

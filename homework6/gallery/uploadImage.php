<?php

include __DIR__ . '/../classes/Uploader.php';

session_start();

$upload = new Uploader('img');

if ( $filename = $upload->upload() ) { ?>
    <h2>Файл: <?php echo $filename; ?> загружен</h2>
    <a href="/homework6/gallery/index.php">перейти в галлерею</a>
<?php } ?>
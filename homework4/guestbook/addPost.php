<?php

include __DIR__ . '/functions.php';

$filename = __DIR__ . '/data.txt';

if ( isset($_POST['post']) && $_POST['post'] != '' ) {
    $posts = getPosts( $filename );
    $posts[] = $_POST['post'];
    file_put_contents( $filename, implode("\n", $posts) );
}

header( 'Location: /homework4/guestbook/index.php' );
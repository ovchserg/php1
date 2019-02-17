<?php

include __DIR__ . '/../classes/GuestBook.php';

$posts = new GuestBook( __DIR__ . '/data.txt' );

if ( isset($_POST['post']) && $_POST['post'] != '' ) {

    $posts->append( $_POST['post'] );
    $posts->save();

}

header( 'Location: /homework6/guestbook/index.php' );
<?php

include __DIR__ . '/functions.php';

session_start();

if (
    getCurrentUser()
    &&
    isset($_FILES['img'])
    &&
    uploadImage($_FILES['img'])
)
{
    header( 'Location: /homework5/index.php' );
}
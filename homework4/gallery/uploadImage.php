<?php

include __DIR__ . '/functions.php';

if( isset($_FILES['img']) ) {
    if( true == uploadImage($_FILES['img']) ){
        header( 'Location: /homework4/gallery/index.php' );
    }
}


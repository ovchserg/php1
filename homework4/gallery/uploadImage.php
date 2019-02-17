<?php

include __DIR__ . '/functions.php';

if( isset($_FILES['img']) ) {
    if( true == uploadImage() ){
        header( 'Location: /homework4/gallery/index.php' );
    }
}


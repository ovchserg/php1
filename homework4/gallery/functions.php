<?php

function getImages($dirname) {

    return array_diff( scandir( $dirname, SCANDIR_SORT_NONE ), ['.', '..'] );

}

function uploadImage($file) {

    if (0 == $file['error']) {

        if ( in_array( $file['type'], ['image/png', 'image/jpeg'] ) ) {

           if ( move_uploaded_file( $file['tmp_name'], __DIR__ . '/images/' . $file['name'] )) {
               return true;
           }

           return false;
        }

        return false;
    }
}
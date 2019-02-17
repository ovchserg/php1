<?php

function getImages($dirname) {

    return array_diff( scandir( $dirname, SCANDIR_SORT_NONE ), ['.', '..'] );

}

function uploadImage() {

    if (0 == $_FILES['img']['error']) {

        if ( in_array( $_FILES['img']['type'], ['image/png', 'image/jpeg'] ) ) {

           if ( move_uploaded_file(
               $_FILES['img']['tmp_name'],
               __DIR__ . '/images/' . $_FILES['img']['name'] )
           )
           {
               return true;
           }

           return false;
        }

        return false;
    }
}
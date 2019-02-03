<?php

function getPosts( $filename ) {

    return file( $filename, FILE_IGNORE_NEW_LINES );

}

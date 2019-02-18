<?php

class Gallery
{
    public  $images;

    public function __construct()
    {
        $this->images = array_diff( scandir(__DIR__ . '/../gallery/images/', SCANDIR_SORT_NONE ), ['.', '..'] );
    }

}
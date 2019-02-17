<?php

include __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{

    public function append($text)
    {
        $this->data[] = $text;
    }

}
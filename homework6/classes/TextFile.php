<?php

class TextFile
{

    protected $filename;
    protected $data;

    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->data = file($filename, FILE_IGNORE_NEW_LINES);
    }

    public function getData()
    {
        return $this->data;
    }

    public function save()
    {
        file_put_contents($this->filename, implode("\n", $this->data));
    }

}
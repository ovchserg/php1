<?php

include __DIR__ . '/Log.php';

class Uploader
{

    protected $fieldname;

    public function __construct($fieldname)
    {
        $this->fieldname = $fieldname;
    }

    public function isUploaded()
    {
        if(
            isset( $_FILES[$this->fieldname] )
            &&
            0 == $_FILES[$this->fieldname]['error']
        )
        {
            return true;
        }

    }

    public function upload()
    {
        if(
            $this->isUploaded()
            &&
            move_uploaded_file
            (
                $_FILES[$this->fieldname]['tmp_name'],
                dirname(__DIR__) . '/gallery/images/' . $_FILES[$this->fieldname]['name']
            )
        )
        {
            $filename = $_FILES[$this->fieldname]['name'];

            $log = new Log;
            $log->setLog( ' UploadImage  ' . $filename );

            return $filename; // возвращает имя загруженного файла
        }

    }


}
<?php

class Log
{

    public function setLog($str)
    {
        $str = date('Y-m-d H:i:s') . '  ' . $_SESSION['username'] . '   ' . $str . "\n";
        file_put_contents(__DIR__ . '/../log.txt', $str, FILE_APPEND);
    }

}
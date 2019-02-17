<?php

include __DIR__ . '/../functions.php';

$result = calculate( $_GET['a'], $_GET['b'], $_GET['operator']);

echo $result;


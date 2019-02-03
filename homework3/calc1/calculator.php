<?php

include __DIR__ . '/functions.php';

$result = calculate( (int) $_GET['a'], (int) $_GET['b'], $_GET['operator']);

echo $result;


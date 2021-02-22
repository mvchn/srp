<?php

require dirname(__DIR__) . '/srp/vendor/autoload.php';

$a = new TheClass; //unknown name of class
$someStuff = 'stuff';
echo $a($someStuff) . PHP_EOL;



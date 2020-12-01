<?php

require_once 'Models/AbstractClass.php';
require_once 'Models/FinalClass.php';

use App\Ut\Models\FinalClass;

$arr = [
    'hello',
    'to',
    'you'
];
$int = 23;
$final = new FinalClass($arr, $int);

print_r($final->convertAll());
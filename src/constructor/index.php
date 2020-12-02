<?php

declare(strict_types=1);

require_once 'Models/SimpleClass.php';

use App\Co\Models\SimpleClass;

$someA = 'hello';
$someB = 22;
$simple = new SimpleClass($someA, $someB);

print_r($simple->run());
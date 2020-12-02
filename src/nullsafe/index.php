<?php

require_once 'Models/UserClass.php';

use App\Nu\Models\UserClass as User;

$name = 'John';
$sname = 'Doe';
$age = 1;
$user = new User($name, $sname, $age);

$res = $user?->getAge();
echo $res;
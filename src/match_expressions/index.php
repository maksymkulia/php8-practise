<?php

declare(strict_types=1);

$statusCode = 400;

$msg = match($statusCode) {
    200, 300 => 'ok',
    400 => 'Not found',
    500 => 'Server error',
    default => 'ups'
};

echo $msg;
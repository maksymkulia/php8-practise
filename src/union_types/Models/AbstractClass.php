<?php

declare(strict_types=1);

namespace App\Ut\Models;

/**
 * Construction property promotion is not working is abstract Classes
 *
 * @package App\Ut\Models
 */
abstract class AbstractClass
{
    public array $someArr;
    public int|string $someIntOrString;

    public final function __construct(
        array $someArr,
        int|string $someIntOrString
    ) {
        $this->someArr = $someArr;
        $this->someIntOrString = $someIntOrString;
    }

    abstract protected function convertArr(array $someArr): string;
    abstract protected function convertIntOrString(int|string $someIntOrString): string;
}
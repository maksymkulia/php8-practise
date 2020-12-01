<?php

declare(strict_types=1);

namespace App\Ut\Models;

class FinalClass extends AbstractClass
{

    protected final function convertArr(array $someArr): string
    {
        return serialize($someArr);
    }

    protected final function convertIntOrString(int|string $someIntOrString): string
    {
        return serialize($someIntOrString);
    }

    public final function convertAll(): array|string
    {
        return [
            $this->convertArr($this->someArr),
            $this->convertIntOrString($this->someIntOrString)
        ];
    }
}
<?php

declare(strict_types=1);

namespace App\Co\Models;

class SimpleClass
{
    public function __construct(
        public string $a,
        public int $b
    ) {}

    public function run():array {
        return [
            $this->a,
            $this->b
        ];
    }
}
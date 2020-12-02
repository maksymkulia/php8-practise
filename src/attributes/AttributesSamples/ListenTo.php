<?php

declare(strict_types=1);

namespace App\At\AttributesSamples;

#[Attribute]
class ListenTo
{
    public string $event;

    public function __construct(string $event)
    {
        $this->event = $event;
    }
}
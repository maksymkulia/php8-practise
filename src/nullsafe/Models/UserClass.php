<?php

namespace App\Nu\Models;

class UserClass
{
    public function __construct(
        public string $name,
        public string $sname,
        public ?int $age
    ) {}

    public function getName(): string {
        return $this->name;
    }

    public function getSName(): string {
        return $this->sname;
    }

    public function getAge(): ?int {
        return $this->age;
    }
}
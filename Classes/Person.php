<?php

class Person
{
    public function __construct(protected string $name, protected int $age)
    {
    }

    public function getInfo(): string
    {
        return "imie: {$this->name} wiek: {$this->age}";
    }
}

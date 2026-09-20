<?php

include_once 'Person.php';

class Student extends Person
{
    public function __construct(string $name, int $age, protected string $school)
    {
        parent::__construct($name, $age);
    }

    public function getInfo(): string
    {
        return "imie: {$this->name} wiek: {$this->age} school: {$this->school}";
    }

    public function getHtml(): string
    {
        return <<<HTML
<div>
    <h2>{$this->name}</h2>
    <p>Wiek: {$this->age}</p>
    <p>Szkoła: {$this->school}</p>
</div>
HTML;
    }
}

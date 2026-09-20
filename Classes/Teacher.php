<?php

include_once 'Person.php';

class Teacher extends Person
{
    public function __construct(string $name, int $age, protected string $school, protected string $subject)
    {
        parent::__construct($name, $age);
    }

    public function getInfo(): string
    {
        return "imie: {$this->name} wiek: {$this->age} school: {$this->school} subject: {$this->subject}";
    }

    public function getHtml(): string
    {
        return <<<HTML
<div>
    <h2>{$this->name}</h2>
    <p>Wiek: {$this->age}</p>
    <p>Szkoła: {$this->school}</p>
    <p>Przedmiot: {$this->subject}</p>
</div>
HTML;
    }
}

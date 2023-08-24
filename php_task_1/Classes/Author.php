<?php


namespace Classes;

require_once 'abstracts/person.php';

use Abstracts\Person;

class Author extends Person
{
    public $academicTitle;

    public function __construct($firstName, $lastName, $academicTitle)
    {
        parent::__construct($firstName, $lastName);
        $this->academicTitle = $academicTitle;
    }
}

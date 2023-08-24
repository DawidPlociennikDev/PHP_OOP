<?php

namespace Classes;

require_once 'interfaces/readable.php';

use Interfaces\Readable;

class Book implements Readable
{
    public string $title;
    public int $releaseYear;
    public array $authors;

    public function __construct(string $title, int $releaseYear, array $authors)
    {
        $this->title = $title;
        $this->releaseYear = $releaseYear;
        $this->authors = $authors;
    }

    public function read(Reader $reader)
    {
        echo "Reading by {$reader->firstName} ...<br>{$this->title} ({$this->releaseYear})<br>";
        echo "Authors:<br>";
        foreach ($this->authors as $author) {
            echo "- ({$author->academicTitle}) {$author->firstName} {$author->lastName}<br>";
        }
        echo "<br>";
    }
}

<?php

namespace Classes;

class Library
{
    protected array $books;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function listBooks()
    {
        echo "Books in the library:<br>";
        foreach ($this->books as $book) {
            echo "- {$book->title} ({$book->releaseYear})<br>";
        }
        echo "<br>";
    }
}

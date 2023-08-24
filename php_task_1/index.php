<?php

require 'classes/author.php';
require 'classes/book.php';
require 'classes/library.php';
require 'classes/reader.php';
use Classes\Book;
use Classes\Author;
use Classes\Reader;
use Classes\Library;

$author1 = new Author("David", "P", 'mgr inż');
$author2 = new Author("Daniel", "L", 'inż');

$book1 = new Book("Czysty kod", 2023, [$author1]);
$book2 = new Book("Atomowe nawyki", 2021, [$author2, $author1]);

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);

$library->listBooks();

$reader1 = new Reader("Jan", "Janowski");
$reader2 = new Reader("Jurek", "Owsiak");

$book1->read($reader1);
$book2->read($reader2);
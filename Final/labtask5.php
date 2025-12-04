<?php
class Book {
    public $title;
    public $author;
    public $year;

    function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function getDetails() {
        return "Title: " . $this->title . ", Author: " . $this->author . ", Year: " . $this->year;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setYear($year) {
        $this->year = $year;
    }
}

$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);

$book->setTitle("The Great Gatsby");
$book->setAuthor("F. Scott Fitzgerald");
$book->setYear(1925);

echo $book->getDetails();
?>

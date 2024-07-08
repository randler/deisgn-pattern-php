<?php

namespace App\Behavioral\Interpreter\Entity;

class BookList
{
    private array $books = array();
    private int $bookCount = 0;

    public function __construct()
    {}

    public function getBookCount(): int
    {
        return $this->bookCount;
    }

    public function setBookCount(int $newCount): void
    {
        $this->bookCount = $newCount;
    }

    public function addBook(Book $book_in): int
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;
        return $this->getBookCount();
    }


    public function removeBook(Book $book_in)
    {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if (
                $book_in->getAuthorAndTitle() ==
                $this->books[$counter]->getAuthorAndTitle()
            ) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function getBook(int $bookNumberToGet)
    {
        if ((is_numeric($bookNumberToGet)) &&
            ($bookNumberToGet <= $this->getBookCount())
        ) {
            return $this->books[$bookNumberToGet];
        } else {
            return NULL;
        }
    }
}
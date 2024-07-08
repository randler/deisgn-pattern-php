<?php

use App\Behavioral\Interpreter\BookInterpreter;
use App\Behavioral\Interpreter\Entity\Book;
use App\Behavioral\Interpreter\Entity\BookList;

describe('Interpreter', function () {
    it('testInterpreter', function () {
        $bookList = new BookList();
        $inBook1 = new Book('PHP for Cats', 'Larry Truett');
        $inBook2 = new Book('MySQL for Cats', 'Larry Truett');
        $bookList->addBook($inBook1);
        $bookList->addBook($inBook2);

        $interpreter = new BookInterpreter($bookList);

        $result = $interpreter->interpret('author 1');
        expect($result)->toBe('Can not process, can only process book author #,  book title #, or book author title #');

        $result = $interpreter->interpret('book author 1');
        expect($result)->toBe('Larry Truett');

        $result = $interpreter->interpret('book title 2');
        expect($result)->toBe('MySQL for Cats');

        $result = $interpreter->interpret('book author title 1');
        expect($result)->toBe('PHP for Cats by Larry Truett');

        $result = $interpreter->interpret('book title 3');
        expect($result)->toBe('Can not process, there is no book # 3');

        $result = $interpreter->interpret('book title one');
        expect($result)->toBe('Can not process, book # must be numeric.');

    });
});
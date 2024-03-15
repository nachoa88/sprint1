<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LibraryTest extends TestCase
{
    public static function providerBook(): array
    {
        return [
            [new Book('El Quijote', 'Cervantes', '1234567890', 'Novel·la Policial', 1000)],
            [new Book('El Señor de los Anillos', 'Tolkien', '1234567891', 'Fantàstic', 1500)],
            [new Book('El Perfume', 'Süskind', '1234567892', 'Novel·la Policial', 300)],
            [new Book('El Código Da Vinci', 'Brown', '1234567893', 'Novel·la Policial', 600)],
            [new Book('El Hobbit', 'Tolkien', '1234567894', 'Fantàstic', 400)],
        ];
    }


    #[DataProvider('providerBook')]
    public function testAddBook($book){
        $library = new Library();
        $library->addBook($book);
        $this->assertEquals($library->getBooks(), [$book]);
    }

    #[DataProvider('providerBook')]
    public function testDeleteBook($book){
        $library = new Library();
        $library->deleteBook($book);
        $this->assertEquals($library->getBooks(), []);
    }

    #[DataProvider('providerBook')]
    public function testModifyBook($book){
        $library = new Library();
        $library->addBook($book);
        $book->setPages(500);
        $library->modifyBook($book);
        $this->assertEquals($library->getBooks(), [$book]);
    }
}

<?php
require_once 'src/nivell3/Library.php';
require_once 'src/nivell3/Book.php';

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

    public static function providerLibrary(): array
    {
        // Creem un array amb tots els llibres.
        $allBooks1 = [
            new Book('El Quijote', 'Cervantes', '1234567890', 'Novel·la Policial', 1000),
            new Book('El Señor de los Anillos', 'Tolkien', '1234567891', 'Fantàstic', 1500),
        ];
        // Creem un array amb els llibres que tenen més de 500 pàgines, expected result.
        $longBooks1 = [
            new Book('El Quijote', 'Cervantes', '1234567890', 'Novel·la Policial', 1000),
            new Book('El Señor de los Anillos', 'Tolkien', '1234567891', 'Fantàstic', 1500),
        ];
        // Creem una segona array per fer un segon test.
        $allBooks2 = [
            new Book('El Perfume', 'Süskind', '1234567892', 'Novel·la Policial', 300),
            new Book('El Código Da Vinci', 'Brown', '1234567893', 'Novel·la Policial', 600),
            new Book('El Hobbit', 'Tolkien', '1234567894', 'Fantàstic', 400),
        ];
        $longBooks2 = [
            new Book('El Código Da Vinci', 'Brown', '1234567893', 'Novel·la Policial', 600),
        ];
        // Tornem els parells de arrays, allBooks i longBooks(expected result).
        return [
            [$allBooks1, $longBooks1],
            [$allBooks2, $longBooks2],
        ];
    }


    #[DataProvider('providerBook')]
    public function testAddBook($book)
    {
        $library = new Library();
        $library->addBook($book);
        $this->assertEquals($library->getBooks(), [$book]);
    }

    #[DataProvider('providerBook')]
    public function testDeleteBook($book)
    {
        $library = new Library();
        // Hem de crear un altre llibre different del que ens passen per paràmetre per esborrar uno i que quedi l'altre. 
        $book2 = new Book('Romeo y Julieta', 'Shakespeare', '1234567895', 'Novel·la Policial', 200);
        // Afegim els dos llibres al array books[].
        $library->addBook($book);
        $library->addBook($book2);
        // Esborrem el llibre que ens passen per paràmetre.
        $library->deleteBook($book);
        // I ens ha de quedar el book2.
        $this->assertEquals($library->getBooks(), [$book2]);
    }

    #[DataProvider('providerBook')]
    public function testModifyBook($book)
    {
        $library = new Library();
        $library->addBook($book);
        // Clonem el llibre i modifiquem per exemple el titol.
        $modifiedBook = clone $book;
        $modifiedBook->setTitle('Nou títol per al llibre');
        // Modifiquem el llibre.
        $library->modifyBook($modifiedBook);
        // Revisem que el llibre s'hagi modificat.
        $this->assertEquals($library->getBooks(), [$modifiedBook]);
    }

    #[DataProvider('providerLibrary')]
    public function testGetLongBooks($allBooks, $expectedBooks)
    {
        $library = new Library($allBooks);
        $this->assertEquals($expectedBooks, $library->getLongBooks());
    }
}

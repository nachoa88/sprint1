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

    public static function providerBookByTitle(): array
    {
        $title1 = 'El Quijote';
        $title2 = 'El Señor de los Anillos';
        $title3 = 'El Perfume';
        $book1 = new Book('El Quijote', 'Cervantes', '1234567890', 'Novel·la Policial', 1000);
        $book2 = new Book('El Señor de los Anillos', 'Tolkien', '1234567891', 'Fantàstic', 1500);
        $book3 = new Book('El Perfume', 'Süskind', '1234567892', 'Novel·la Policial', 300);

        return [
            [$title1, $book1],
            [$title2, $book2],
            [$title3, $book3],
        ];
    }

    public static function providerBookByGenre(): array
    {
        $genre1 = 'Novel·la Policial';
        $genre2 = 'Novel·la Policial';
        $genre3 = 'Fantàstic';
        $book1 = new Book('El Perfume', 'Süskind', '1234567892', 'Novel·la Policial', 300);
        $book2 = new Book('El Código Da Vinci', 'Brown', '1234567893', 'Novel·la Policial', 600);
        $book3 = new Book('El Hobbit', 'Tolkien', '1234567894', 'Fantàstic', 400);

        return [
            [$genre1, $book1],
            [$genre2, $book2],
            [$genre3, $book3],
        ];
    }

    public static function providerBookByISBN(): array
    {
        $isbn1 = '1234567890';
        $isbn2 = '1234567891';
        $isbn3 = '1234567892';
        $book1 = new Book('El Quijote', 'Cervantes', '1234567890', 'Novel·la Policial', 1000);
        $book2 = new Book('El Señor de los Anillos', 'Tolkien', '1234567891', 'Fantàstic', 1500);
        $book3 = new Book('El Perfume', 'Süskind', '1234567892', 'Novel·la Policial', 300);

        return [
            [$isbn1, $book1],
            [$isbn2, $book2],
            [$isbn3, $book3],
        ];
    }

    public static function providerBookByAuthor(): array
    {
        $author1 = 'Süskind';
        $author2 = 'Brown';
        $author3 = 'Tolkien';
        $book1 = new Book('El Perfume', 'Süskind', '1234567892', 'Novel·la Policial', 300);
        $book2 = new Book('El Código Da Vinci', 'Brown', '1234567893', 'Novel·la Policial', 600);
        $book3 = new Book('El Hobbit', 'Tolkien', '1234567894', 'Fantàstic', 400);

        return [
            [$author1, $book1],
            [$author2, $book2],
            [$author3, $book3],
        ];
    }

    #[DataProvider('providerBook')]
    public function testAddBook($book): void
    {
        // Aqui no fem servir el constructor perquè el que volem és provar el mètode addBook().
        $library = new Library();
        $library->addBook($book);
        $this->assertEquals($library->getBooks(), [$book]);
    }

    #[DataProvider('providerBook')]
    public function testDeleteBook($book): void
    {
        // Hem de crear un altre llibre different del que ens passen per paràmetre per esborrar uno i que quedi l'altre. 
        $book2 = new Book('Romeo y Julieta', 'Shakespeare', '1234567895', 'Novel·la Policial', 200);
        // Afegim els dos llibres al array books[]. Ara amb el constructor podem passar un array de llibres directament sense fer servir addBook().
        $library = new Library([$book, $book2]);
        // Esborrem el llibre que ens passen per paràmetre.
        $library->deleteBook($book);
        // I ens ha de quedar el book2.
        $this->assertEquals($library->getBooks(), [$book2]);
    }

    #[DataProvider('providerBook')]
    public function testModifyBook($book): void
    {
        $library = new Library([$book]);
        // Clonem el llibre i modifiquem per exemple el titol.
        $modifiedBook = clone $book;
        $modifiedBook->setTitle('Nou títol per al llibre');
        // Modifiquem el llibre.
        $library->modifyBook($modifiedBook);
        // Revisem que el llibre s'hagi modificat.
        $this->assertEquals($library->getBooks(), [$modifiedBook]);
    }

    #[DataProvider('providerLibrary')]
    public function testGetLongBooks($allBooks, $expectedBooks): void
    {
        $library = new Library($allBooks);
        $this->assertEqualsCanonicalizing($expectedBooks, $library->getLongBooks());
    }

    #[DataProvider('providerBookByTitle')]
    public function testGetBookByTitle($title, $expectedBook): void
    {
        $library = new Library([$expectedBook]);
        $this->assertEquals($expectedBook, $library->getBookByTitle($title));
    }

    #[DataProvider('providerBookByGenre')]
    public function testGetBookByGenre($genre, $expectedBook): void
    {
        $library = new Library([$expectedBook]);
        $this->assertEquals($expectedBook, $library->getBookByGenre($genre));
    }

    #[DataProvider('providerBookByISBN')]
    public function testGetBookByISBN($isbn, $expectedBook): void
    {
        $library = new Library([$expectedBook]);
        $this->assertEquals($expectedBook, $library->getBookByISBN($isbn));
    }

    #[DataProvider('providerBookByAuthor')]
    public function testGetBookByAuthor($author, $expectedBook): void
    {
        $library = new Library([$expectedBook]);
        $this->assertEquals($expectedBook, $library->getBookByAuthor($author));
    }
}

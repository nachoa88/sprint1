<?php
/*
Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:
- Afegeixin, esborrin i modifiquin un llibre de la llibreria.
- Permetin consultar llibres per títol, gènere, ISBN o autor.
- Retornar llibres grans (més de 500 pàgines).
*/
require_once 'Book.php';

class Library
{
    // Array a on guardarem els llibres
    private array $books = [];

    // Al constructor de la classe, li passem com a default un array buit, per si inicialitzem la llibreria sense llibres.
    public function __construct(array $books = [])
    {
        $this->books = $books;
    }

    // Mètode que retorna tots els llibres.
    public function getBooks(): array
    {
        return $this->books;
    }

    // Mètode que afegeix un llibre al array books[], és a dir a la llibreria.
    public function addBook(Book $book): void
    {
        // Afegim el llibre al array books[].
        $this->books[] = $book;
    }

    // Mètode que esborra un llibre del array books[], és a dir de la llibreria.
    public function deleteBook(Book $bookToDelete): void
    {
        // Fem un loop per cada llibre del array books[].
        foreach ($this->books as $key => $book) {
            // I per cada llibre comprovem si el isbn del llibre a esborrar és igual al isbn del llibre del array books[].
            if ($book->getIsbn() === $bookToDelete->getIsbn()) {
                unset($this->books[$key]);
                // Després de esborrar un llibre, reordenem el array books[] perquè no quedin claus buides.
                $this->books = array_values($this->books);
                break;
            }
        }
    }

    public function modifyBook(Book $bookToModify): void
    {
        // Fem un loop per cada llibre del array books[].
        foreach ($this->books as $key => $book) {
            // I per cada llibre comprovem si el isbn del llibre a modificar existeix al array books[].
            if ($book->getIsbn() === $bookToModify->getIsbn()) {
                // Si existeix, substituim el llibre del array books[] pel llibre a modificar.
                $this->books[$key] = $bookToModify;
                break;
            }
        }
    }

    public function getLongBooks(): array
    {
        // Primer creem un array per guardar els llibres que tenen més de 500 pàgines.
        $longBooks = [];
        // Després fem un loop per cada llibre del array books[] i mirem si té més de 500 pàgines.
        foreach($this->books as $book) {
            if($book->getPages() > 500) {
                // Si té més de 500 pàgines, l'afegim al array longBooks[].
                $longBooks[] = $book;
            }
        }

        return $longBooks;
    }

    public function getBookByTitle(string $title): Book
    {
        // Fem un loop per cada llibre del array books[] i comprovem si el títol del llibre és igual al títol que busquem.
        foreach($this->books as $book) {
            if($book->getTitle() == $title) {
                // Si el trobem, retornem el llibre.
                return $book;
            }
        }
        // Si no el trobem, podem llençar una excepció.
        throw new Exception("Book with title $title not found");
    }

    public function getBookByGenre(string $genre): Book
    {
        foreach($this->books as $book) {
            if($book->getGenre() == $genre) {
                return $book;
            }
        }

        throw new Exception("Book with genre $genre not found");
    }

    public function getBookByISBN(string $isbn): Book
    {
        foreach($this->books as $book) {
            if($book->getIsbn() == $isbn) {
                return $book;
            }
        }

        throw new Exception("Book with ISBN $isbn not found");
    }

    public function getBookByAuthor(string $author): Book
    {
        foreach($this->books as $book) {
            if($book->getAuthor() == $author) {
                return $book;
            }
        }

        throw new Exception("Book with author $author not found");
    }
}

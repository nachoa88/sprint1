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
    private $books = [];

    // Mètode que retorna tots els llibres.
    public function getBooks()
    {
        return $this->books;
    }

    // Mètode que afegeix un llibre al array books[], és a dir a la llibreria.
    public function addBook($book)
    {
        // Afegim el llibre al array books[].
        $this->books[] = $book;
    }

    // Mètode que esborra un llibre del array books[], és a dir de la llibreria.
    public function deleteBook($bookToDelete)
    {
        // Fem un loop per cada llibre del array books[].
        foreach ($this->books as $key => $book) {
            // I per cada llibre comprovem si el isbn del llibre a esborrar és igual al isbn del llibre del array books[].
            if ($book->getIsbn() == $bookToDelete->getIsbn()) {
                unset($this->books[$key]);
                // Després de esborrar un llibre, reordenem el array books[] perquè no quedin claus buides.
                $this->books = array_values($this->books);
                break;
            }
        }
    }

    public function modifyBook($bookToModify)
    {
        // Fem un loop per cada llibre del array books[].
        foreach ($this->books as $key => $book) {
            // I per cada llibre comprovem si el isbn del llibre a modificar existeix al array books[].
            if ($book->getIsbn() == $bookToModify->getIsbn()) {
                // Si existeix, substituim el llibre del array books[] pel llibre a modificar.
                $this->books[$key] = $bookToModify;
                break;
            }
        }
    }
}

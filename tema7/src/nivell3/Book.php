<?php

/* Necessitem representar la informació d’un llibre, que té:
- Un títol
- Un autor/autora
- Un ISBN
- Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
núm. de pàgines.
*/

Class Book 
{
    private $title;
    private $author;
    private $isbn;
    private $genre;
    private $pages;

    public function __construct($title, $author, $isbn, $genre, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->genre = $genre;
        $this->pages = $pages;
    }

    // GETTERS:
    // Com que per esborrar un llibre necessitem comparar el isbn del llibre a esborrar amb el isbn dels llibres del array books[], 
    // necessitem un mètode per obtenir el isbn del llibre ja que és un atribut privat.
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }
    // Per la funció que retorna llibres grans (més de 500 pàgines).
    public function getPages(): int
    {
        return $this->pages;
    }

    // SETTERS:
    // Per modificar un llibre necessitem els setters, per ara només fem servir el títol.
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }
}
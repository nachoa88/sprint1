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

    // Com que per esborrar un llibre necessitem comparar el isbn del llibre a esborrar amb el isbn dels llibres del array books[], 
    // necessitem un mètode per obtenir el isbn del llibre ja que és un atribut privat.
    public function getIsbn()
    {
        return $this->isbn;
    }

    
    // Per modificar un llibre necessitem els setters, per ara només fem servir el títol.
    public function setTitle($title)
    {
        $this->title = $title;
    }

}
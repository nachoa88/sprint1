<?php

class Movie
{
    public string $title;
    public int $duration;
    public string $director;

    public function __construct($title, $duration, $director)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->director = $director;
    }
    // Override de la funció __toString per mostrar la informació de la pel·lícula.
    public function __toString()
    {
        return $this->title . " - " . $this->director . " - " . $this->duration . " min";
    }
}

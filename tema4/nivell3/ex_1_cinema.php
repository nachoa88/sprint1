<?php

class Cinema
{
    private string $name;
    private string $neighborhood;
    public $movies = [];

    public function __construct($name, $neighborhood, $movies)
    {
        $this->name = $name;
        $this->neighborhood = $neighborhood;
        $this->movies = $movies;
    }

    public function showMovies()
    {
        echo "<h3>The movies available in " . $this->name . " are:</h3>";
        echo "<ul>";
        foreach ($this->movies as $movie) {
            // Com hem fet un override de la funció __toString, podem imprimir directament l'objecte i PHP cridarà aquesta funció.
            echo "<li>" . $movie . " min</li>";
        }
        echo "</ul>";
        echo "<hr>";
    }

    public function getLongestMovie()
    {
        $movieDuration = 0;
        $movieName = "";
        echo "<h4>The longest movie in " . $this->name . " is: </h4>";
        foreach ($this->movies as $movie) {
            if ($movie->duration > $movieDuration) {
                $movieDuration = $movie->duration;
                $movieName = $movie->title;
            }
        }
        echo "<div> The longest movie in " . $this->name . " is " . $movieName . " and has " . $movieDuration . " min of duration. </div>";
    }

    public function getMoviesByDirector($director)
    {
        $moviesByDirector = [];
        foreach ($this->movies as $movie) {
            if ($movie->director == $director) {
                array_push($moviesByDirector, $movie);
            }
        }

        echo "<h3>The movies directed by " . $director . " in cinema " . $this->name . " are:</h3>";
        echo "<ul>";
        foreach ($moviesByDirector as $movie) {
            echo "<li>" . $movie . "</li>";
        }
        echo "</ul>";
    }
}

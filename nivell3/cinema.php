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
        echo "The movies available in " . $this->name . " are: \n";
        print_r($this->movies);
    }

    public function getLongestMovie()
    {
        $movieDuration = 0;
        $movieName = "";
        foreach ($this->movies as $movie) {
            if ($movie->duration > $movieDuration) {
                $movieDuration = $movie->duration;
                $movieName = $movie->title;
            }
        }

        echo "The longest movie in " . $this->name . " is " . $movieName . " and has " . $movieDuration . " min of duration. \n";
    }
}


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
}

$movie1 = new Movie("The Godfather", 175, "Francis Ford Coppola");
$movie2 = new Movie("The Shawshank Redemption", 142, "Frank Darabont");
$movie3 = new Movie("The Dark Knight", 152, "Christopher Nolan");
$movie4 = new Movie("12 Angry", 96, "Sidney Lumet");
$movie5 = new Movie("Schindler's List", 195, "Steven Spielberg");

$cinemaPobleNou = new cinema("Cinema Poble Nou", "Poble Nou", [$movie1, $movie2]);
$cinemaPobleNou->showMovies();

$cinemaSants = new cinema("Cinema Sants", "Sants", [$movie3, $movie4, $movie5]);
$cinemaSants->showMovies();

$cinemaPobleNou->getLongestMovie();
<?php
require_once 'ex_1_cinema.php';
require_once 'ex_1_movie.php';

// Creació de les pel·lícules
$movie1 = new Movie("The Godfather", 175, "Francis Ford Coppola");
$movie2 = new Movie("The Shawshank Redemption", 142, "Frank Darabont");
$movie3 = new Movie("The Dark Knight", 152, "Christopher Nolan");
$movie4 = new Movie("12 Angry", 96, "Sidney Lumet");
$movie5 = new Movie("Schindler's List", 195, "Steven Spielberg");

// Creació de cine amb les pel·lícules disponibles
$cinemaPobleNou = new cinema("Cinema Poble Nou", "Poble Nou", [$movie1, $movie2]);
$cinemaSants = new cinema("Cinema Sants", "Sants", [$movie3, $movie4, $movie5]);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Cinema</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
    <h2>--- Exercici 1: Cinema ---</h2>
    <?php
    // Ensenyar les pel·lícules disponibles en cada cinema dins del body.
    $cinemaPobleNou->showMovies();
    $cinemaSants->showMovies();

    // Pel·lícula amb major duració:
    $cinemaPobleNou->getLongestMovie();
    $cinemaSants->getLongestMovie();
    ?>

    <hr>
    <form method="get">
        <label for="director">Search movies by director:</label>
        <input type="text" id="director" name="director">
        <input type="submit" value="Search">
    </form>

    <!-- Aquest if statement està bé posar-lo després del form per no barrejar codi -->
    <?php
    if (isset($_GET['director'])) {
        $searchDirector = $_GET['director'];
        // Buscar pel·lícules per director:
        $cinemaPobleNou->getMoviesByDirector($searchDirector);
        $cinemaSants->getMoviesByDirector($searchDirector);
    }
    ?>

</body>

</html>
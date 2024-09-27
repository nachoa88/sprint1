<?php

// Exercici 1: Crea i imprimeix les variables
echo "--- Exercici 1 --- \n";
$name = "Nacho";
$age = 35;
$height = 1.74;
$is_student = true;

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Height: " . $height . "mts" . "\n";
echo "Is student: " . $is_student . "\n";

// Crea una constant amb el teu nom i imprimeix-la com a titol de pantalla.
// const MY_NAME = "Nacho Albiol"; --> Aquesta forma es fa servir més per classes.
define("MY_NAME", "Nacho Albiol"); // --> Millor fer servir define per constants globals.
echo "<h1>" . MY_NAME . "</h1>\n";

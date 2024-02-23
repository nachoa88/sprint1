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
const MY_NAME = "Nacho Albiol";
echo "<h1>" . MY_NAME . "</h1>\n";

// Exercici 2: Hello World
echo "--- Exercici 2 --- \n";
$hello_world = "Hello, World!";
echo $hello_world . "\n";
echo strtoupper($hello_world) . "\n";
echo strrev($hello_world) . "\n";
$curs_php = "Aquest és el curs de PHP";
echo $hello_world . " " . $curs_php . "\n";


// Exercici 3: Operacions matemàtiques
echo "--- Exercici 3 --- \n";
$X = 9;
$Y = 5;
$N = 0.5;
$M = 1.75;

echo "Valors: " . "X = " . $X . ", Y = " . $Y . "\n";
echo "Suma: " . ($X + $Y) . "\n";
echo "Resta: " . ($X - $Y) . "\n";
echo "Producto: " . ($X * $Y) . "\n";
echo "Mòdul: " . ($X % $Y) . "\n";

echo "Valors: " . "N = " . $N . ", M = " . $M . "\n";
echo "Suma: " . ($N + $M) . "\n";
echo "Resta: " . ($N - $M) . "\n";
echo "Producte: " . ($N * $M) . "\n";
echo "Mòdul: " . ($N % $M) . "\n";

echo "Double X: " . ($X * 2) . "\n";
echo "Double Y: " . ($Y * 2) . "\n";
echo "Double N: " . ($N * 2) . "\n";
echo "Double M: " . ($M * 2) . "\n";

echo "Suma total: " . ($X + $Y + $N + $M) . "\n";
echo "Producte total: " . ($X * $Y * $N * $M) . "\n";

function calculator($num1, $num2, $function)
{
    if ($function == "suma") {
        echo "Suma: " . $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "\n";
    } elseif ($function == "resta") {
        echo "Resta: " . $num1 . " - " . $num2 . " = " . ($num1 - $num2) . "\n";
    } elseif ($function == "multiplicació") {
        echo "Multiplicació: " . $num1 . " * " . $num2 . " = " . ($num1 * $num2) . "\n";
    } elseif ($function == "divisió") {
        echo "Divisió: " . $num1 . " / " . $num2 . " = " . ($num1 / $num2) . "\n";
    } else {
        echo "Operació no reconeguda\n";
    }
}

calculator(2, 5, "multiplicació");

// Exercici 4: Comptador
echo "--- Exercici 4 --- \n";

function counter(int $sequence, int $last_number = 10)
{
    if ($sequence > $last_number) {
        echo "El número final ha de ser més gran que la seqüència\n";
    } else if ($sequence <= 0 || $last_number <= 0) {
        echo "Els dos valors han de ser positius\n";
    }

    while ($last_number >= 0) {
        echo $last_number . "\n";
        $last_number -= $sequence;
    }
}

counter(3, 10);

// Exercici 5: Grau del estudiant
echo "--- Exercici 5 --- \n";

function grade_calculator(int $score)
{
    if ($score < 0 || $score >= 100) {
        echo "El % ha de ser entre 0 i 100\n";
    }

    if ($score >= 60) {
        $grade = "Primera Divisió";
    } elseif ($score >= 45) {
        $grade = "Segona Divisió";
    } elseif ($score >= 33) {
        $grade = "Tercera Divisió";
    } else {
        $grade = "L'estudiant reprovarà";
    }
    
    echo "L'estudiant ha obtingut un " . $score . "%, per tant el seu grau és: " . $grade . "\n";
}

grade_calculator(33);

// Exercici 6: Charlie, el gos mossegador
echo "--- Exercici 6 --- \n";

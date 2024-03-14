<?php

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

function calculator(float $num1, float $num2, string $function_name)
{
    if ($function_name == "suma") {
        echo "Suma: " . $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "\n";
    } elseif ($function_name == "resta") {
        echo "Resta: " . $num1 . " - " . $num2 . " = " . ($num1 - $num2) . "\n";
    } elseif ($function_name == "multiplicació") {
        echo "Multiplicació: " . $num1 . " * " . $num2 . " = " . ($num1 * $num2) . "\n";
    } elseif ($function_name == "divisió") {
        echo "Divisió: " . $num1 . " / " . $num2 . " = " . ($num1 / $num2) . "\n";
    } else {
        echo "Operació no reconeguda\n";
    }
}

calculator(2, 5, "multiplicació");

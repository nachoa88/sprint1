<?php

// Exercici 1: Operacions amb arrays array_map().
echo "--- Exercici 1 --- \n";

$arrayInt = [1, 7, 5, 3, 9, 2, 4, 6, 8, 10];

function calculateSquare($x)
{
    return $x * $x;
}
// array_map: Pot aplicar una funció a cada element d'un array (o més d'una array).
print_r(array_map("calculateSquare", $arrayInt));

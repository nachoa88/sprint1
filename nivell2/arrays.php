<?php

// Exercici 1: Intersecció de dues arrays.
echo "--- Exercici 1 --- \n";

$array1 = [1, 8, 5, 1.5, 7, 2, 3, 9, 2.7, 9.7, 5.2];
$array2 = [1.2, 4.5, 1.5, 8, 5, 7, 12.1, 3];

$intersection = array_intersect($array1, $array2);
// Implode: Uneix els elements d'un array en un string, separats en aquest cas per una ",".
echo "Els nombres en comú són: " . implode(", ", $intersection) . "\n";

// Exercici 2: Array conjunta.
echo "--- Exercici 2 --- \n";

$newArray = array_merge($array1, $array2);
print_r($newArray);
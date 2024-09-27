<?php

// Exercici 2: Treballant amb arrays.
echo "--- Exercici 2 --- \n";

$X = array(10, 20, 30, 40, 50, 60);

echo "The size of the array is: " . (sizeof($X)) . "\n";

unset($X[3]); // Quan eliminem un element de l'array, aquest no es reordena.
print_r($X); // Queda un espai buit a l'array.
$X = array_values($X); // Normalitzem els índexs de l'array, ja que al eliminar un element, aquest no es reordena.

echo "And now the size of the array is: " . (sizeof($X)) . "\n";

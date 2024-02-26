<?php

// Exercici 1: Array.
echo "--- Exercici 1 --- \n";

$my_array = [1, 2, 3, 4, 5];

// Imprimir d'un en un els valors de l'array.
echo $my_array[0] . "\n";
echo $my_array[1] . "\n";
echo $my_array[2] . "\n";
echo $my_array[3] . "\n";
echo $my_array[4] . "\n";

// Exercici 2: Treballant amb arrays.
echo "--- Exercici 2 --- \n";

$X = array(10, 20, 30, 40, 50, 60);

echo "The size of the array is: " . (sizeof($X)) . "\n";

unset($X[3]); // Quan eliminem un element de l'array, aquest no es reordena.
print_r($X); // Queda un espai buit a l'array.
$X = array_values($X); // Normalitzem els índexs de l'array, ja que al eliminar un element, aquest no es reordena.

echo "And now the size of the array is: " . (sizeof($X)) . "\n";


// Exercici 3: Funció amb arrays.
echo "--- Exercici 3 --- \n";


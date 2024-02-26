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
$array_paraules = ["hola", "adeu", "fins aviat", "a reveure", "fins la propera"];

function findLetter(array $array, string $letter)
{
    // Inicialitzem la variable que ens indicarà si la lletra es troba a alguna de les paraules per poder tornar true o false.
    $containLetter = true;
    // Convertim la lletra a minúscula.
    $lowercaseLetter = strtolower($letter);

    foreach ($array as $string) {
        // Convertim la paraula també a minúscula.
        $lowercaseString = strtolower($string);
        // Convertim cada string en un array de caràcters.
        $characters = str_split($lowercaseString);
        // Si la lletra no es troba en algun dels arrays de caràcters, canviem el valor de la variable a false i sortim del bucle.
        if (!in_array($lowercaseLetter, $characters)) {
            $containLetter = false;
            echo "La lletra " . $letter . " no es troba al menys a una de les paraules.\n";
            break;
        }
    }
    
    return $containLetter;
}

$doesContainLetter = findLetter($array_paraules, "a");
echo "La lletra es troba a totes les paraules: " . $doesContainLetter;

// Exercici 4: Arrays associatius.
echo "--- Exercici 4 --- \n";

$my_information = array("nom" => "Nacho", "edat" => 35, "email" => "nacho.albiol88@gmail.com", "menjar favorit" => "milanesa amb puré de patates");

print_r($my_information);

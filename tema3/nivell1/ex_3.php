<?php

// Exercici 3: Funció amb arrays.
echo "--- Exercici 3 --- \n";
$array_paraules = ["hola", "adeu", "fins aviat", "a reveure", "fins la propera"];

function findLetter(array $array, string $letter): bool
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

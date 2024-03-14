<?php

// Exercici 3: Operacions amb arrays array_reduce().
echo "--- Exercici 3 --- \n";

$arrayInt = [1, 29, 5, 2, 8, 16, 17, 21, 11, 10];

// array_reduce ens permet reduir l'array a un sol valor, com a primer paràmetre es passa l'array 
// com a segon paràmetre una funció que es cridarà per cada element de l'array, i com a tercer paràmetre el valor inicial de $carry (0).
$sum = array_reduce($arrayInt, function ($carry, $item) {
    // Primer mira si el nombre és més petit que 2, si ho és, no és primer.
    if ($item < 2) {
        // Tornem el valor acumulat que tenim fins ara sense sumar-li res.
        return $carry;
    }
    // Fem un loop des de 2 intentant dividir el nombre entre tots els nombres entre 2 i la meitat del nombre.
    for ($i = 2; $i <= $item / 2; $i++) {
        // Si alguna de les divisions és exacta, el nombre no és primer.
        if ($item % $i == 0) {
            // Tornem el valor acumulat sense modificar-lo.
            return $carry;
        }
    }
    // Si cap de les divisions té un residu de 0, l'element actual és un nombre primer i s'afegeix a $carry.
    return $carry + $item;
}, 0);

echo "La suma dels nombres primers de l'array dona: " . $sum . "\n";

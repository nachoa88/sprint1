<?php

// Exercici 3: Operacions amb arrays array_reduce().
echo "--- Exercici 3 --- \n";

// Primer fem la funció que ens dirà si el nombre és primer o no.
function isPrime(int $num): bool
{
    // Si és més petit que 2, no és primer.
    if ($num < 2) {
        return false;
    }
    // Fem un loop des de 2 fins a la meitat del nombre. Si el nombre és divisible per qualsevol nombre entre 2 i la meitat del nombre, no és primer.
    for ($i = 2; $i <= $num / 2; $i++) {
        // Si el nombre és divisible per $i, no és primer.
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Després fem la funció que fará un filter aplicant isPrime a l'array i sumarà els nombres primers.
function sumPrimes($array): int
{
    // Ens assegurem que l'array estigui ordenat.
    sort($array);
    // array_filter ens permet eliminar els valors que no passin la funció isPrime, que donarà true si el nombre és primer.
    $primes = array_filter($array, "isPrime");
    // Mostrem els nombres primers que queden a l'array.
    echo implode(", ", array_values($primes)) . "\n";
    // array_reduce ens permet reduir l'array a un sol valor, en aquest cas, la suma dels nombres primers. Es passa l'array i una funció que es cridarà per cada element de l'array.
    // Per cada $item de l'array, sumarà el valor a $carry, que és el valor acumulat.
    $sum = array_reduce($primes, function($carry, $item) {
        $carry += $item;
        return $carry;
    });

    // Retornem l'array amb els nombres primers per si la necessitem.
    return $sum;
}

$arrayInt = [1, 29, 5, 2, 8, 16, 17, 21, 11, 10];
echo sumPrimes($arrayInt);

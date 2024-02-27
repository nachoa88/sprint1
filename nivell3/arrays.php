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

// Exercici 2: Operacions amb arrays array_filter().
echo "--- Exercici 2 --- \n";

$arrayString = ["hola", "adeu", "com", "estàs", "benvingut", "a", "la", "classe"];

function findEvenLength($x)
{
    // strlen: Retorna la longitud d'un string però no compta els caràcters multibyte (diacrítics, etc.).
    //return strlen($x) % 2 == 0;
    // mb_strlen: Retorna la longitud d'un string comptant els caràcters multibyte. Però s'ha d'instalar: sudo apt-get install php-mbstring
    return mb_strlen($x, 'UTF-8') % 2 == 0;
}

print_r(array_filter($arrayString, "findEvenLength"));

// Exercici 3: Operacions amb arrays array_reduce().
echo "--- Exercici 3 --- \n";

$arrayInt2 = [1, 29, 5, 2, 8, 16, 17, 21, 11, 10];

// Primer fem la funció que ens dirà si el nombre és primer o no.
function isPrime(int $num)
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

// Després fem la funció que fará un filter aplicant isPrime a l'array.
function getPrimeNumbers($array)
{
    // Ens assegurem que l'array estigui ordenat.
    sort($array);
    // array_filter ens permet eliminar els valors que no passin la funció isPrime, que donarà true si el nombre és primer.
    $primes = array_filter($array, "isPrime");
    // Mostrem els nombres primers que queden a l'array.
    echo implode(", ", array_values($primes)) . "\n";
    // Retornem l'array amb els nombres primers per si la necessitem.
    return $primes;
}

// Finalment fem la funció que sumarà els nombres primers. array_reduce ens permet reduir l'array a un sol valor, en aquest cas, la suma dels nombres primers.
// Per cada $item de l'array, sumarà el valor a $carry, que és el valor acumulat.
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

$arrayOfPrimes = getPrimeNumbers($arrayInt2);
echo array_reduce($arrayOfPrimes, "sum");

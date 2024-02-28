<?php

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

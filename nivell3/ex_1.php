<?php

// Exercici 1: Sedàs d'Estratòstenes.
echo "--- Exercici 1 --- \n";

function sieveOfEratosthenes(int $n_min, int $n_max): array
{
    $primes = [];
    // Si el mínim és més petit que 2, el posem a 2 perque 2 és el primer nombre primer.
    if ($n_min < 2) {
        $n_min = 2;
    }

    // Fem un loop des de 2 fins al nombre màxim donat.
    for ($i = 2; $i <= $n_max; $i++) {
        // Si el valor $i no està definit a l'array (is not set), el definim com a true (key-value pair) --> $primes[2] = true, $primes[3] = true, etc.
        if (!isset($primes[$i])) {
            $primes[$i] = true;
            /* Una vegada tenima l'array completa amb trues, comencem a marcar fals els nombres que no són primers.
            El loop començarà a posar fals al nombres multiples de 2, ja que el loop comença en el valor $j de $i * $i (2 * 2) que és 4 i anirà pujant de 2 en 2 fins al nombre màxim eliminant 6, 8, 10, etc.
            Una vegada acabat el loop pare, que comença en 2, es passarà al 3, i es marcaran com a fals els nombres múltiples de 3, i així successivament. */
            for ($j = $i * $i; $j <= $n_max; $j += $i) {
                $primes[$j] = false;
            }
        }
    }
    // array_filter ens permet eliminar els valors que siguin false (inclou 0, "", null, false, o una array buida).
    $primes = array_filter($primes);

    // Per ùltim, eliminem els nombres primers (keys) que siguin més petits que el nombre mínim donat.
    foreach (array_keys($primes) as $prime) {
        if ($prime < $n_min) {
            unset($primes[$prime]);
        }
    }

    // Mostrem els nombres primers que queden a l'array. Implode ens permet convertir l'array en un string separant els valors per una coma.
    echo implode(", ", array_keys($primes)) . "\n";
    // Retornem l'array amb els nombres primers per si la necessitem.
    return $primes;
}

// S'ha de cridar la funció amb el nombre mínim i nombre màxim que es vulgui.
sieveOfEratosthenes(7, 25);

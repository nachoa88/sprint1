<?php

// Exercici 4: Comptador
echo "--- Exercici 4 --- \n";

function counter(int $sequence, int $final_number = 10)
{
    // He creat aquesta variable per poder fer la impresió dels números de més petit a més gran.
    $print_number = $final_number;

    if ($sequence > $final_number) {
        echo "El número final ha de ser més gran que la seqüència\n";
    } else if ($sequence <= 0 || $final_number <= 0) {
        echo "Els dos valors han de ser positius\n";
    }

    while ($final_number >= 0) {
        echo ($print_number - $final_number) . "\n";
        $final_number -= $sequence;
    }
}

counter(3, 15);

<?php

// Exercici 6: Charlie, el mossegador
echo "--- Exercici 6 --- \n";

function isBitten(): bool
{
    $probability = (bool)rand(0, 1);

    if ($probability == true) {
        echo "Charlie ha mossegat!\n";
        return $probability;
    } else {
        echo "T'has salvat de ser mossegat pel Charlie!\n";
        return $probability;
    }
}

isBitten();

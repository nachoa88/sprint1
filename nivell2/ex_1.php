<?php

// Exercici 1: Preu per trucada.
echo "--- Exercici 1 --- \n";

// He afegit = 0 pel cas de que l'usuari no introdueixi cap valor.
function calculatePrice(float $duration = 0)
{
    $additional_cost = 0.05;
    $total_cost = 0.10;

    if ($duration < 0) {
        echo "La durada de la trucada no pot ser negativa. \n";
        return;
    } else if ($duration < 3) {
        // number_format per mostrar el resultat amb dues xifres decimals, la segona variable "," es decimals i la tercera "." es el separador de milers.
        echo "El cost de la trucada és de " . number_format($total_cost, 2, ',', '.') . "€. \n";
    } else {
        for ($i = 3; $i < $duration; $i++) {
            $total_cost += $additional_cost;
        }
        echo "El cost de la trucada és de " . number_format($total_cost, 2, ',', '.') . "€. \n";
    }

}

calculatePrice(7);
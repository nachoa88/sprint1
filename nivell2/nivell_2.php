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


// Exercici 2: Botiga.
echo "--- Exercici 2 --- \n";

function calculateSubtotalChocolate(int $quantity)
{
    $chocolate = 1;
    echo "El subtotal de xocolates és de " . number_format(($chocolate * $quantity), 2, ',', '.') . "€. \n";
    return $chocolate * $quantity;
}

function calculateSubtotalGum(int $quantity)
{
    $gum = 0.50;
    echo "El subtotal de xiclets és de " . number_format(($gum * $quantity), 2, ',', '.') . "€. \n";
    return $gum * $quantity;
}

function calculateSubtotalCandy(int $quantity)
{
    $candy = 1.50;
    echo "El subtotal de caramels és de " . number_format(($candy * $quantity), 2, ',', '.') . "€. \n";
    return $candy * $quantity;
}

function calculateTotal(float $total_chocolate, float $total_gum, float $total_candy)
{
    $total = $total_chocolate + $total_gum + $total_candy;
    echo "El total de la compra és de " . number_format($total, 2, ',', '.') . "€. \n";
}
// Guardem els resultats dels subtotals en variables per poder-los passar a la funció calculate_total.
$total_chocolate = calculateSubtotalChocolate(2);
$total_gum = calculateSubtotalGum(10);
$total_candy = calculateSubtotalCandy(3);
// Passem els resultats de les funcions anteriors a la funció calculate_total.
calculateTotal($total_chocolate, $total_gum, $total_candy);
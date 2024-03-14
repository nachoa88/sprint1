<?php

// Exercici 2: Botiga.
echo "--- Exercici 2 --- \n";

function calculateSubtotalChocolate(int $quantity): float
{
    $chocolate = 1;
    echo "El subtotal de xocolates és de " . number_format(($chocolate * $quantity), 2, ',', '.') . "€. \n";
    return $chocolate * $quantity;
}

function calculateSubtotalGum(int $quantity): float
{
    $gum = 0.50;
    echo "El subtotal de xiclets és de " . number_format(($gum * $quantity), 2, ',', '.') . "€. \n";
    return $gum * $quantity;
}

function calculateSubtotalCandy(int $quantity): float
{
    $candy = 1.50;
    echo "El subtotal de caramels és de " . number_format(($candy * $quantity), 2, ',', '.') . "€. \n";
    return $candy * $quantity;
}

function calculateTotal(float $total_chocolate, float $total_gum, float $total_candy): float
{
    $total = $total_chocolate + $total_gum + $total_candy;
    echo "El total de la compra és de " . number_format($total, 2, ',', '.') . "€. \n";
    return $total;
}
// Guardem els resultats dels subtotals en variables per poder-los passar a la funció calculate_total.
$total_chocolate = calculateSubtotalChocolate(2);
$total_gum = calculateSubtotalGum(10);
$total_candy = calculateSubtotalCandy(3);
// Passem els resultats de les funcions anteriors a la funció calculate_total.
calculateTotal($total_chocolate, $total_gum, $total_candy);
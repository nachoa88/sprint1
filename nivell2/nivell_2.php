<?php

// Exercici 1: Preu per trucada.
echo "--- Exercici 1 --- \n";

// He afegit = 0 pel cas de que l'usuari no introdueixi cap valor.
function calculate_price(float $duration = 0)
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

calculate_price(7);


// Exercici 2: Botiga.
echo "--- Exercici 2 --- \n";

function calculate_subtotal_chocolate(int $quantity)
{
    $chocolate = 1;
    echo "El subtotal de xocolates és de " . number_format(($chocolate * $quantity), 2, ',', '.') . "€. \n";
    return $chocolate * $quantity;
}

function calculate_subtotal_gum(int $quantity)
{
    $gum = 0.50;
    echo "El subtotal de xiclets és de " . number_format(($gum * $quantity), 2, ',', '.') . "€. \n";
    return $gum * $quantity;
}

function calculate_subtotal_candy(int $quantity)
{
    $candy = 1.50;
    echo "El subtotal de caramels és de " . number_format(($candy * $quantity), 2, ',', '.') . "€. \n";
    return $candy * $quantity;
}

function calculate_total(float $total_chocolate, float $total_gum, float $total_candy)
{
    $total = $total_chocolate + $total_gum + $total_candy;
    echo "El total de la compra és de " . number_format($total, 2, ',', '.') . "€. \n";
}
// Guardem els resultats dels subtotals en variables per poder-los passar a la funció calculate_total.
$total_chocolate = calculate_subtotal_chocolate(2);
$total_gum = calculate_subtotal_gum(10);
$total_candy = calculate_subtotal_candy(3);
// Passem els resultats de les funcions anteriors a la funció calculate_total.
calculate_total($total_chocolate, $total_gum, $total_candy);
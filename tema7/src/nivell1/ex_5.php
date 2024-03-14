<?php

// Exercici 5: Grau del estudiant
echo "--- Exercici 5 --- \n";

function gradeCalculator(int $score)
{
    if ($score < 0 || $score >= 100) {
        return "El % ha de ser entre 0 i 100\n";
    }

    if ($score >= 60) {
        $grade = "Primera Divisió";
    } elseif ($score >= 45) {
        $grade = "Segona Divisió";
    } elseif ($score >= 33) {
        $grade = "Tercera Divisió";
    } else {
        $grade = "L'estudiant reprovarà";
    }

    return "L'estudiant ha obtingut un " . $score . "%, per tant el seu grau és: " . $grade . "\n";
}

gradeCalculator(33);

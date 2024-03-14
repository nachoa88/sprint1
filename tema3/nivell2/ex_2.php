<?php

// Exercici 2: Array assosiatiu.
echo "--- Exercici 2 --- \n";

// Aquest array té un key, que és el nom del estudiant.
$students = [
    "Nacho" => [7.5, 4, 8, 2.5, 7],
    "Joan" => [10, 8, 9, 4.5, 7.5],
    "Maria" => [7, 6.5, 8, 2.5, 7],
    "Alba" => [8.5, 9, 8, 9, 7.5],
];

// Aquest exemple no és correcte per aquest exercici perquè per cada element de l'array li estem passant una key different, "nom" i "grades".
// $students = array("name"=>"Nacho", "grades"=>[7.5, 4, 8, 2.5, 7]);

function calculateAverageStudent(string $student, array $students): float
{
    $sum = 0;
    $grades = $students[$student];
    foreach ($grades as $grade) {
        $sum += $grade;
    }
    // count: ens permet contar la quantitat d'elements que té un array.
    return $sum / count($grades);
}

function calculateTotalAverage(array $students): float
{
    $total = 0;
    foreach ($students as $student) {
        // array_search: ens permet buscar un valor dins d'un array i retornar la key que en aquest cas és el nom.
        $studentName = array_search($student, $students);
        // Amb el nom, podem aplicar la funció calculateAverageStudent.
        $total += calculateAverageStudent($studentName, $students);
    }

    return $total / count($students);
}

$averageStudent = calculateAverageStudent("Nacho", $students);
echo "La mitjana de l'estudiant és: " . $averageStudent . "\n";

$totalAverage = calculateTotalAverage($students);
echo "La mitjana total dels estudiants és: " . $totalAverage . "\n";

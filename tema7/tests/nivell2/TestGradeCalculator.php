<?php
// Com estem fent test d'una funció i no d'una classe, necessitem importar-la.
require 'src/nivell1/ex_5.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class TestGradeCalculator extends TestCase
{
    public static function providerGradeCalculator(): array
    {
        return [
            [60, "L'estudiant ha obtingut un 60%, per tant el seu grau és: Primera Divisió\n"],
            [45, "L'estudiant ha obtingut un 45%, per tant el seu grau és: Segona Divisió\n"],
            [33, "L'estudiant ha obtingut un 33%, per tant el seu grau és: Tercera Divisió\n"],
            [32, "L'estudiant ha obtingut un 32%, per tant el seu grau és: L'estudiant reprovarà\n"],
            [101, "El % ha de ser entre 0 i 100\n"],
            [-1, "El % ha de ser entre 0 i 100\n"],
        ];
    }

    #[DataProvider('providerGradeCalculator')]
    public function testGradeCalculator($number, $expected): void
    {
        $result = gradeCalculator($number);
        $this->assertEquals($expected, $result);
    }
}


<?php
// Com estem fent test d'una funció i no d'una classe, necessitem importar-la.
require 'src/nivell1/ex_5.php';

use PHPUnit\Framework\TestCase;

final class TestGradeCalculator extends TestCase
{
    public function testPrimeraDivisio()
    {
        $result = gradeCalculator(60);
        $expected = "L'estudiant ha obtingut un 60%, per tant el seu grau és: Primera Divisió\n";
        // assertSame utilitza comparació estricta, 123 === 123 (el valor i el tipus han de ser el mateix).
        // assertEqual utilitza comparació simple, '123' == 123 (el valor és el mateix, no comprova el tipus)
        $this->assertEquals($expected, $result);
    }
    
    public function testSegundaDivisio()
    {
        $result = gradeCalculator(45);
        $expected = "L'estudiant ha obtingut un 45%, per tant el seu grau és: Segona Divisió\n";
        $this->assertEquals($expected, $result);
    }
    
    public function testTerceraDivisio()
    {
        $result = gradeCalculator(33);
        $expected = "L'estudiant ha obtingut un 33%, per tant el seu grau és: Tercera Divisió\n";
        $this->assertEquals($expected, $result);
    }

    public function testReprovat()
    {
        $result = gradeCalculator(32);
        $expected = "L'estudiant ha obtingut un 32%, per tant el seu grau és: L'estudiant reprovarà\n";
        $this->assertEquals($expected, $result);
    }

    public function testError()
    {
        $result = gradeCalculator(101);
        $expected = "El % ha de ser entre 0 i 100\n";
        $this->assertEquals($expected, $result);
    }

    public function testError2()
    {
        $result = gradeCalculator(-1);
        $expected = "El % ha de ser entre 0 i 100\n";
        $this->assertEquals($expected, $result);
    }
}


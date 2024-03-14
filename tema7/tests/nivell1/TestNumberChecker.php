<?php

use PHPUnit\Framework\TestCase;


// No és necessari que aquesta classe sigui final, al posar-la com a final, no es podrà fer cap herència d'aquesta classe.
final class TestNumberChecker extends TestCase
{
    /* Este test no és pot fer en aquest cas perquè el $number és private i no es pot accedir des de fora de la classe i no hi ha getter.
    public function testClassConstructor()
    {
        $numberChecker = new NumberChecker(7);
        // assertSame comprova que el valor de la propietat number de la instància de NumberChecker és 7
        $this->assertSame(7, $numberChecker->number);
    }*/

    // Aquest test comprova que el mètode isEven retorna true quan el número és parell
    public function testIsEven()
    {
        $numberChecker = new NumberChecker(2);
        // assertTrue comprova que el mètode isEven retorna true
        $this->assertTrue($numberChecker->isEven());
    }

    // Fem el mateix però amb un número senar.
    public function testIsNotEven()
    {
        $numberChecker = new NumberChecker(3);
        // assertFalse comprova que el mètode isEven retorna false
        $this->assertFalse($numberChecker->isEven());
    }

    // Ara provem el mètode isPositive.
    public function testIsPositive()
    {
        $numberChecker = new NumberChecker(1);
        $this->assertTrue($numberChecker->isPositive());
    }

    // I finalment provem el mètode isPositive amb un número negatiu.
    public function testIsNotPositive()
    {
        $numberChecker = new NumberChecker(-1);
        $this->assertFalse($numberChecker->isPositive());
    }
}

<?php
// Aquest use és necessari per a poder fer servir l'atribut DataProvider.
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class TestNumberChecker extends TestCase
{
    // Creem una funció que ens retorni un array amb un altre array dels valors que volem comprovar per a la funció isEven
    public static function providerIsEven(): array
    {
        return [
            [2, true],
            [3, false],
        ];
    }
    // Ara fem el mateix però per a la funció isPositive
    public static function providerIsPositive(): array{
        return [
            [1, true],
            [-1, false],
        ];
    }

    
    // Afegim l'atribut DataProvider amb el nom de la funció que volem utilitzar per a comprovar els valors.
    #[DataProvider('providerIsEven')]
    public function testIsEven($number, $expected): void
    {
        $numberChecker = new NumberChecker($number);
        // Canviem el mètode assertTrue per assertSame perquè estem donant un expected value amb el que comparar.
        $this->assertSame($expected, $numberChecker->isEven());
    }

    /* Ara que estem fent servir el DataProvider, no necessitem fer un test per a cada cas, ja que el DataProvider ja ho fa per nosaltres.
    public function testIsNotEven(): void
    {
        $numberChecker = new NumberChecker(3);
        $this->assertFalse($numberChecker->isEven());
    }*/

    #[DataProvider('providerIsPositive')]
    public function testIsPositive($number, $expected): void
    {
        $numberChecker = new NumberChecker($number);
        $this->assertSame($expected, $numberChecker->isPositive());
    }
    /* Tampoc necessitem testear en false perquè ho fa el provider.
    public function testIsNotPositive(): void
    {
        $numberChecker = new NumberChecker(-1);
        $this->assertFalse($numberChecker->isPositive());
    }*/
}

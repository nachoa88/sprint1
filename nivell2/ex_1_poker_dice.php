<?php

// Exercici 1: Poker Dice.
echo "--- Exercici 1 --- \n";

class PokerDice
{
    private static $diceFaces = ["As", "K", "Q", "J", "7", "8"];
    // static ens permetrà sumar el total de tirades de tots els daus, fa que la variable apliqui a totes les instàncies d'una mateixa classe.
    private static $totalThrows = 0;
    private $lastThrow;

    public function throw()
    {
        // Guardem el valor de la tirada en una propietat de la instància.
        $this->lastThrow = self::$diceFaces[rand(0, 5)];
        // self:: ens permet accedir a una propietat o mètode estàtic, cada vegada que es cridi a throw, sumarem una tirada al total de tirades.
        self::$totalThrows++;
        return $this->lastThrow;
    }

    public function shapeName()
    {
        echo "The last dice throw was: " . $this->lastThrow . "\n";
    }

    public function getTotalThrows()
    {
        echo "Total throws: " . self::$totalThrows . "\n";
    }
}

// Funció per llançar molts daus alhora.
function throwFiveDices(int $times)
{
    // Creem un array per guardar els daus que anirem llançant. 
    $dices = [];
    // Llançem el dau les vegades que li diem en $times i creem una instància de PokerDice per vegada.
    for ($i = 0; $i < $times; $i++) {
        $pokerDice = new PokerDice();
        $pokerDice->throw();
        $dices[] = $pokerDice;
        $pokerDice->shapeName();
    }
    // Després de llançar tots els daus, cridem a la funció que ens mostrarà el total de tirades.
    $pokerDice->getTotalThrows();
    return $dices;
}

// Cridem a la funció amb una instància de PokerDice
throwFiveDices(5);
// Creem una nova instància de PokerDice per comprovar que el total de tirades és correcte.
$newPokerDice = new PokerDice();
$newPokerDice->throw();
$newPokerDice->getTotalThrows();

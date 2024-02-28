<?php

// Exercici 1: POO
echo "--- Exercici 1 --- \n";

class PokerDice {
    private $diceFaces = ["As", "K", "Q", "J", "7", "8"];
    // static ens permetrà sumar el total de tirades de tots els daus. 
    private static $totalThrows = 0;

    public function throw() {
        $lastThrow = $this->diceFaces[rand(0, 5)];
        // self:: ens permet accedir a una propietat o mètode estàtic.
        self::$totalThrows++;
        return $lastThrow;
    }

    public function shapeName() {
        echo "The last dice throw was: " . $this->throw() . "\n";
    }

    public function getTotalThrows(){
        echo "Total throws: " . self::$totalThrows . "\n";
    }
}

// Funció per llançar molts daus alhora.
function throwFiveDices(int $times) {
    // Creem un array per guardar els daus que anirem llançant. 
    $dices = [];
    // Llançem el dau les vegades que li diem en $times i creem una instància de PokerDice per vegada.
    for ($i = 0; $i < $times; $i++) {
        $pokerDice = new PokerDice();
        $pokerDice->shapeName();
        $dices[] = $pokerDice;
    }
    $pokerDice->getTotalThrows();
    return $dices;
}

// Cridem a la funció amb una instància de PokerDice
throwFiveDices(5);
// Creem una nova instància de PokerDice per comprovar que el total de tirades és correcte.
$newPokerDice = new PokerDice();
$newPokerDice->throw();
$newPokerDice->getTotalThrows();

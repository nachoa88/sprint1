<?php
// Exercici 1: PHP Avançat: Constants magiques.
echo "--- Exercici 1 --- \n";

class MagicConstants
{
    function getFile()
    {
        return __FILE__;
    }

    function getDir()
    {
        return __DIR__;
    }
}

$magicConstant = new MagicConstants();
echo $magicConstant->getFile() . "\n";
echo $magicConstant->getDir() . "\n";


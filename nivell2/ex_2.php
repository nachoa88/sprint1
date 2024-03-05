<?php
// Exercici 2: PHP Avançat: Sobreescriptura de constants màgiques.
echo "--- Exercici 2 --- \n";

class OverrideMethods
{
    private $isThisMagic;
    // __get() is utilized for reading data from inaccessible properties, and we're going to use it to override the default behavior of the private property.
    public function __get($property)
    {
        echo "The property $property is private, you can't access it, not even with magic methods. \n";
    }
    // __set() is run when writing data to inaccessible properties, but we're going to use it to override the default behavior of the private property.
    public function __set($property, $value)
    {
        echo "I know you thought this would work, but I'm not going to let you set the $property property to $value. \n";
    }
}

$overrideMethod = new OverrideMethods();
// When trying to access the private property, the __get() method will be called.
$overrideMethod->isThisMagic;
// When trying to set the private property, the __set() method will be called.
$overrideMethod->isThisMagic = "'I'm really a bad developer!'";


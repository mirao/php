<?php
class Car
{
    var $type, $color, $desc;
    static $descGlobal = "It's a car";

    private static function printDesc()
    {
        echo "Global desc: " . self::$descGlobal, PHP_EOL;
    }

    function __construct($type = "Trabant", $color = "White", $desc = "Classic")
    {
        $this->type = $type;
        $this->color = $color;
        $this->desc = $desc;
    }

    function print()
    {
        echo "Type: " . $this->type, PHP_EOL;
        echo "Color: " . $this->color, PHP_EOL;
        echo "Desc: " . $this->desc, PHP_EOL;
        self::printDesc();
    }
}

$car = new Car;
$car->type = "Ferrari";
$car->color = "Red";
$car->print();
$car2 = new Car("Audi", "Blue", "Very modern");
$car2->print();
// Car::printDesc(); // print desc globally - it produces error, because the method is private

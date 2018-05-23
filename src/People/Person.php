<?php

namespace ErikFig\People;

class Person
{
    use \ErikFig\GetterSetter;

    private $name;
    private $age;
    private $weight;

    public function __construct()
    {
        echo 'classe instanciada' . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    public function getName()
    {
        return explode('r', $this->name);
    }

    public function __toString() :string
    {
        return $this->name . ', ' . $this->age . ', ' . $this->weight . '.';
    }
}

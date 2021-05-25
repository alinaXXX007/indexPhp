<?php


class Animals {
    public $food, $location;
    public function __construct($food, $location)
    {
        $this->food = $food;
        $this->location = $location;
    }
    public function makeNoise(){
        return 'Animal sleep';
    }
    public function eat(){
        return $this -> $food;
    }
    public function sleep(){

    }
}
class Dog extends Animals{
    public function __construct($food, $location ) {
        parent::__construct($food, $location);
    }
    public function makeNoise() {
        return parent::makeNoise() . "I am Dog";
    }
    public function eat() {
        return parent::eat();
    }
}

class Cat extends Animals{
    public function __construct($food, $location) {
        parent::__construct($food, $location);
    }
    public function makeNoise() {
        return parent::makeNoise() . "I am Cat";
    }
    public function eat() {
        return parent::eat();
    }
}
class Horse extends Animals{
    public function __construct($food, $location) {
        parent::__construct($food, $location);
    }
    public function makeNoise() {
        return parent::makeNoise() . "I am Horse";
    }
    public function eat() {
        return parent::eat();
    }
}
class Veterynar
{
    public function treatAnimal(){
        return $this->$food . 'and' . $this->$location;
    }
}

$masAnimals = new Animals[4];
$masAnimals[1]= new Dog();
$masAnimals[2]= new Cat();
$masAnimals[3]= new Horse();

$masAnimals->treatAnimal();
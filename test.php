<?php

class Vehicle{

    public function __construct(private $model, private $brand){

    }



public function drive(){
    echo "$this->model and $this->brand is driving";
}

}

class EV extends Vehicle{
    public function __construct(private $model, private $brand, private $color){
        parent:: __construct($model, $brand);

    }

    public function start(){
        echo "$this->model and $this->brand, $this->color is starting to drive";
    }
}


$car = new Vehicle("Toyota", "Corolla");
echo $car->drive() . "</br>";


$ev = New EV("MG", "EV", "Dark Blue");
echo $ev->start(). "<br>";
$ev->drive();
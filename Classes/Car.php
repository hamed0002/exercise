<?php

class Car {
    //properties
    private $brand;
    public $color;
    protected $weight;
    //contreuctor
    public function __construct($brand,$color = "none"){
        $this->brand = $brand;
        $this->color = $color;
    }

    //Method
    public function getCarInfo(){
        return "Color:" . $this->color. "Brand:" . $this->brand;
    }
    // getter and setter methods
    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $allowedColors = [
            "Red",
            "Green",
            "Blue",
            "Yellow"

        ];
        if(in_array($color,$allowedColors)){
        $this->brand = $color;}
    }
}
/*
$car1 = new Car("Volvo","red");
$car2 = new Car ("BMW");
$car3 = new Car("Toyota","yellow");
echo $car1->color . "<br>";
echo $car3->getCarInfo();
*/
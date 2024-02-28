<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once "Classes/Car.php";
$car1 = new Car("pride","Green"); 
echo $car1-> getCarInfo() . "<br>";
$car1->setBrand("Volvo");
echo $car1->getBrand() . "<br>";

class Fruits{
   public $name;
   protected $color;
   public function __construct($name,$color){
    $this->name = $name;
    $this->color = $color;
   }
}
$apple = new Fruits("apple","red");
$apple->name = 'orange';
echo $apple->name;
fopen("index.php","r");
echo fread("index.php","r");
?>
    
</body>
</html>
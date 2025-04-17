<?php
interface Shape {
 public funcƟon area();
}

class Circle implements Shape {
 public $radius;

 public funcƟon __construct($radius) {
 $this->radius = $radius;
 }

 public funcƟon area() {
 return pi() * $this->radius * $this->radius;
 }
}

$obj = new Circle(5);
echo "Area of circle: " . $obj->area() . "<br>";
?> 

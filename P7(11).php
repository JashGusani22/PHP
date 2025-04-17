<?php
class Person {
 public $name;

 public funcƟon __construct($name) {
 $this->name = $name;
 }

 public funcƟon __clone() {
 echo "Object cloned.<br>";
 }
}

$obj1 = new Person("John");
$obj2 = clone $obj1;

echo "Original: " . $obj1->name . "<br>";
echo "Cloned: " . $obj2->name . "<br>";
?> 

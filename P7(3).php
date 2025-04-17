<?php
class Demo {
 private $name;

 public funcƟon setName($name) {
 $this->name = $name;
 }

 public funcƟon getName() {
 return $this->name;
 }
}

$obj = new Demo();
$obj->setName("Alice");
echo "Name: " . $obj->getName() . "<br>";
?> 

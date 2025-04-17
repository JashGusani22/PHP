<?php

class Animal {
 public $name;

 public funcƟon __construct($name) {
 $this->name = $name;
 }

 public funcƟon speak() {
 echo "$this->name makes a sound.<br>";
 }
}

class Dog extends Animal {
 public funcƟon bark() {
 echo "$this->name barks!<br>";
 }
}

$obj = new Dog("Buddy");
$obj->speak();
$obj->bark();
?>

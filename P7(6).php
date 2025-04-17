<?php

class Animal {
 public funcƟon breathe() {
 echo "Animal breathes.<br>";
 }
}

class Mammal extends Animal {
 public funcƟon walk() {
 echo "Mammal walks.<br>";
 }
}

class Dog extends Mammal {
 public funcƟon bark() {
 echo "Dog barks.<br>";
 }
}

$obj = new Dog();
$obj->breathe();
$obj->walk();
$obj->bark();
?>

<?php
abstract class Animal {

 public abstract funcƟon makeSound();

 public funcƟon breathe() {
 echo "Animal is breathing.<br>";
 }
}

class Dog extends Animal {
 public funcƟon makeSound() {
 echo "Woof!<br>";
 }
}

$obj = new Dog();
$obj->makeSound();
$obj->breathe();
?> 

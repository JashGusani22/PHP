<?php
class Animal {
 public funcƟon speak() {
 echo "Animal speaks.<br>";
 }
}

class Dog extends Animal {

 public funcƟon speak() {
 echo "Dog barks.<br>";
 }
}

$obj = new Dog();
$obj->speak();
?> 

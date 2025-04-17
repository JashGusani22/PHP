<?php
interface Animal {
 public funcƟon speak();
}
interface Pet {
 public funcƟon play();
}
class Dog implements Animal, Pet {
 public funcƟon speak() {
 echo "Woof!<br>";
 }
 public funcƟon play() {
 echo "Dog is playing.<br>";
 }
}
$obj = new Dog();
$obj->speak();
$obj->play();
?>

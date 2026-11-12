<?php

// Parent Class
class Animal {
    // A general method
    public function makeSound() {
        return "Some generic animal sound...<br>";
    }
}

// Child Class 1: Dog
class Dog extends Animal {
    // Overriding the parent's makeSound method
    public function makeSound() {
        return "Dog says: Woof! Woof!<br>";
    }
}

// Child Class 2: Cat
class Cat extends Animal {
    // Overriding the parent's makeSound method
    public function makeSound() {
        return "Cat says: Meow! Meow!<br>";
    }
}

// ---------------------------------------------------------

// Testing Polymorphism
$animals = [
    new Animal(),
    new Dog(),
    new Cat()
];

// Loop through each animal and call makeSound()
foreach ($animals as $animal) {
    echo $animal->makeSound();
}

?>
<?php

// Parent class
class Animal {
    public function speak() {
        return "I make a sound";
    }
}


// Child class
class Dog extends Animal {
    public function bark() {
        return "Woof!";
    }
}

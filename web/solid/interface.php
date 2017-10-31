<?php

interface Animal {
    public function walk();
    public function eat();
    public function fly();
}
interface Walkabale {
    public function walk()
}

interface Flyble {
    public function fly()
}

class Bird implements Walkable, Flyble {
    public function walk() {
        //...
    }
    public function eat();
    public function fly();
}
class Dog implements Walkable {
    public function walk() {
        // ...
    }
    public function eat() {
        // ...
    }
    public function fly() {
        throw new Exception('Docs could not fly');
    }
}
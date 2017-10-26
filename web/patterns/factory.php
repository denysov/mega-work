<?php

class BBQPizza {}
class CheesePizza {}
class MargaritaPizza {}

class PizzaFactory {
    
    public function create($type) {
    if ('cheese' === $type) {
       return new CheesePizza();
    }
    
    if ('bbq' === $type) {
        return new BBQPizza();
    }
    
    if ('margarita' === $type) {
        return new MargaritaPizza();
    }
    
    throw new \Exception();
    }
    
}

$factory = new PizzaFactory();
$pizza = $factory->create('cheese');

var_dump($pizza);
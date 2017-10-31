<?php

class Car {
    
    public function drive() {
        $this->pressFlutch();
        $this->turnKorobka();
        $this->pressBrake();
        $this->releaseBrake()->pressGas();
    }
    
}

class AutomaticCar extends Car {
    
    public function drive() {
        
        $this->pressBrake();
        $this->turnAutomat();
        
    }
    
}
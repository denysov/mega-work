<?php 

class Duck {
    
    protected $color;
    
    public function setParams($color) {
        $this->color = $color;
    }
    
}

class AfricanDuck extends Duck {

    
}

class ToyDuck extends Duck {
    
    protected $battery;
    
    public function setParams($color, $battery) {
        parent::__costruct($color);
        $this->battery = $battery;
    }
}

$ducks = [
    new Duck(),
    new AfricanDuck(),
    new ToyDuck(),
    new Duck()
];


foreach ($ducks as $duck) {
    $duck->setParams('Black', 'battery')
    
}
<?php 

class Car{
    public $carName;
    public function __construct($carName) {
        $this->carName = $carName;
    }
    
    protected function drive(){
        echo $this->carName . "is drive";
    }
}

class Truck extends Car{
    public $carName;
    public function __construct($carName) {
        $this->carName = $carName;
    }

    public function getDrive(){
        $this->drive();
    }

    public function stop(){
        echo $this->carName . "is stop";
    }

    public static function startEngine(){
        return new static("Toyota");
        // (Or)
        // return new Truck("Toyota");
    }
}

$truck = new Truck("LightTruck");
$truck->getDrive();

Truck::startEngine()->stop();

?>
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
    private $carWheels;
    public function __construct($carName,$carWheels) {
        $this->carName = $carName;
        $this->carWheels = $carWheels;
    }

    public function getDrive(){
        $this->drive();
    }

    public function stop(){
        echo $this->carName . $this->carWheels . "is stop";
    }

    public static function startEngine(){
        return new static("Toyota",12);
        // (Or)
        // return new Truck("Toyota");
    }
}

$truck = new Truck("LightTruck",12);
$truck->getDrive();

Truck::startEngine()->stop();

?>
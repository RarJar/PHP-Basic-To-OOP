<?php 

class Car{
    public $carName;
    public function __construct($carName) {
        $this->carName = $carName;
    }
    protected function drive(){
        echo $this->carName . "is drive";
    }

    public function getDrive(){
        $this->drive();
    }
}

$car = new Car("BMW");
$car->drive();

?>
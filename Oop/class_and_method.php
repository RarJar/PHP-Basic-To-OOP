<?php 

class Car {
    function drive(){
        echo "car is drive";
    }
    function stop(){
        return "car is stop";
    }
    function thisConcept(){
        return $this;
        // (or)
        // return new Car();
    }

    static function staticConcept(){
        return new Car();
        // can't use $this in static method
    }
}

$car = new Car();
$car->drive();  //because echo
echo $car->stop();  //because return

$car->thisConcept()->drive(); // because $this

Car::staticConcept()->drive(); // because static

?>
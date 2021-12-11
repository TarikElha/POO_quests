<?php
require_once 'HighWay.php';
require_once 'Car.php';

final class MotorWay extends HighWay
{
    
    public function __construct(int $nbLane = 4, int $maxSpeed = 130){
        parent::__construct($nbLane, $maxSpeed);
    }

    //motorway : tout type de voiture
    public function addVehicle(Vehicle $car):void{
    
        if($car instanceof Car)
            $this->currentVehicles [] = $car;
    }

}
<?php
require_once 'HighWay.php';
require_once 'Bicycle.php';

final class PedestrianWay extends HighWay
{

    public function __construct(int $nbLane = 1, int $maxSpeed = 10){
        parent::__construct($nbLane, $maxSpeed);
    }

    //PedestrianWay : Bike et Skateboard uniquement
    public function addVehicle(Vehicle $pedestre):void{
    
        if($pedestre instanceof Bicycle || $pedestre instanceof Skateboard)
            $this->currentVehicles [] = $pedestre;
    }
}
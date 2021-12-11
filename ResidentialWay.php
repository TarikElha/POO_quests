<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50){
        parent::__construct($nbLane, $maxSpeed);
    }

    //ResidentialWay : tout type de véhicule
    public function addVehicle(Vehicle $vehicle):void{

        if($vehicle instanceof Vehicle)
            $this->currentVehicles [] = $vehicle;        }
    }
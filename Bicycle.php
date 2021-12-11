<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Bicycle extends Vehicle implements LightableInterface
{
    //Dans la classe Bike, où une dynamo est utilisée, switchOn() retourne true seulement si la currentSpeed() est >10km/h, tandis que switchOff() retourne toujours false.

    public function switchOn():bool{
        if(10 <= $this->getCurrentSpeed())
                return true;
        return false;
    }
    public function switchOff():bool{
        return false;
    }
}
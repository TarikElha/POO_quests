<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        "fuel",
        "electric"
    ];

    private string $energy;
    private int $energyLevel = 10;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start():void{
        if($this->hasParkBrake)
            throw new Exception("Le frein à main est levé !");
    }

    public function switchOn():bool{
        return true;
    }
    public function switchOff():bool{
        return false;
    }

    

    public function getEnergy():string{
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        if(in_array($energy, SELF::ALLOWED_ENERGIES))
            $this->energy = $energy;
    }
    public function getEnergyLevel():int{
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    } 
    public function getParkBrake():bool{
        return $this->hasParkBrake;
    }
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    } 
}
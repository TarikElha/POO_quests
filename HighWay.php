<?php

abstract class HighWay
{
protected $currentVehicles = [];
protected int $nbLane;
protected int $maxSpeed;

public function __construct(int $nbLane, int $maxSpeed){
   $this->nbLane = $nbLane;
   $this->maxSpeed = $maxSpeed;

}

abstract public function addVehicle(Vehicle $vehicle); //methode abstraite

public function getNbLane(): int
   {
      return $this->nbLane;
   }
public function setnbLane(int $nbLane): void
{
      $this->nbLane = $nbLane;
}

public function getMaxSpeed(): int
   {
      return $this->maxSpeed;
   }
public function setMaxSpeed(int $maxSpeed): void
{
      $this->maxSpeed = $maxSpeed;
}

public function getCurrentVehicles(): array
   {
      return $this->currentVehicles;
   }
public function setCurrentVehicles(array $currentVehicles): void
{
      for($i=0; $i<count($currentVehicles);$i++){  
         $this->currentVehicles[$i] = $currentVehicles[$i];
      }
}

/* Ajouter à la classe HighWay une méthode abstraite addVehicle() prenant en paramètre un objet de type Vehicle.

implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicles, uniquement si ce dernier est autorisé sur ce type de voie.
 Ainsi, pour MotorWay, addVehicle($car) ajoutera bien une voiture au tableau, tandis que addVehicle($bike) ne le fera pas,
 car il n’est pas possible de rouler en vélo sur une autoroute. Les règles attendues sont les suivantes:

    motorway : tout type de voiture
    ResidentialWay : tout type de véhicule
    PedestrianWay : Bike et Skateboard uniquement
 */


}
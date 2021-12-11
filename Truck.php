<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $stockCapacity;
    private int $stock = 0;
    private string $energy;
    public const ALLOWED_ENERGIES = [
        "fuel",
        "electric"
    ];


    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity){
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockCapacity = $stockCapacity;
    }


    public function fillingStatus(int $charge):string{
        $fillingStatus = "in fill";

        $var = $this->stock + $charge; //controle de la charge

        if($var > $this->stockCapacity)
            $fillingStatus = "full";
        return $fillingStatus;
    }

    public function filling(int $charge):string{
        $filling = $this->fillingStatus($charge);

        if($filling === "in fill")
            $this->setStock($charge);   
        
        return $filling;
    }



    

    public function setStock(int $stock):void{
        if($this->fillingStatus($stock) === "in fill")
            $this->stock += $stock;
    }

    public function getStock():int{
        return $this->stock;
    }

    public function setEnergy(string $energy): void
    {
        if(in_array($energy, SELF::ALLOWED_ENERGIES))
            $this->energy = $energy;
    }

    public function getEnergy():string{
        return $this->energy;
    }
    
    public function getStockCapacity():int{
        return $this->stockCapacity;
    }
    public function setStockCapacity($stockCapacity){
        $this->stockCapacity = $stockCapacity;
    }

    /* sa capacité de stockage.
    son chargement, qui est initialement à zéro.

La capacité de stockage doit être saisie au moment de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie.
Il a également une méthode qui permet de savoir s’il est plein ou non. Celle-ci retourne in filling quand il n'est pas plein et full quand il est plein.

    N'oublie pas les getters et les setters !!

Critères de validation

    Le nom de la classe est en anglais et en UpperCamelCase.
    La classe contient toutes les propriétés et méthodes demandées.
    Les noms des propriétés et des méthodes sont en anglais et en camelCase.
    Les visibilités public/private/protected sont correctement définies.
    Sur index.php, il est possible d'instancier autant d’objets Truck que désirés, sans provoquer d'erreur.
    Sur index.php, les camions avancent, freinent et contrôlent leur chargement sans erreur.
    Ton code est disponible sur GitHub. */
}
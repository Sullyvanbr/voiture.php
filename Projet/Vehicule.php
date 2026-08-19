<?php

class Vehicule{
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;
    

    public function __construct(string $nameCar, float $nbWheel, int $geer){
        $this->nomVehicule = $nameCar;
        $this->nbrRoue = $nbWheel;
        $this->vitesse = $geer;
    }

    public function detect(){
        if($this->nbrRoue <= 2){
            return "<p>C'est une moto</p>";
        }
        else{
            return "<p>C'est une voiture</p>";
        }
    }
    
    public function getVitesse(){
        return "<p>".$this->vitesse."</p>";
    }

    public function boost(){
        $this->vitesse += 50;
    }

}
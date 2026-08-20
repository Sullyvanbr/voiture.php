<?php

class Vehicule{
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;
    

    public function __construct(string $nameCar, float $nbWheel, int $geer){
        $this->nomVehicule = $nameCar;
        $this->nbrRoue = $nbWheel;
        $this->vitesse = $gear;
    }

    public function detect(){
        if($this->nbrRoue <= 2){
            return "<p>C'est une moto</p>";
        }
        else{
            return "<p>C'est une voiture</p>";
        }
    }
    
    public function getNomVehicule(): string {
        return $this->nomVehicule;
    }

    public function getVitesse(){
        return "<p>".$this->vitesse."</p>";
    }

    public function boost(){
        $this->vitesse += 50;
    }

    public function plusRapide(Vehicule $vehicule){
        if($this->vitesse >= $vehicule->getVitesse()){
            return $this;
        }
        return $vehicule;
    }
}

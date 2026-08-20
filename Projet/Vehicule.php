<?php

class Vehicule{
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;
    

    public function __construct(string $nameCar, float $nbWheel, int $gear){
        $this->nomVehicule = $nameCar;
        $this->nbrRoue = $nbWheel;
        $this->vitesse = $gear;
    }

    public function detect(): string{
        if($this->nbrRoue <= 2){
            return "C'est une moto";
        }
        else{
            return "C'est une voiture";
        }
    }
    
    public function getNomVehicule(): string {
        return $this->nomVehicule;
    }

    public function getVitesse(): float{
        return $this->vitesse;
    }

    public function boost(): void{
        $this->vitesse += 50;
    }

    public function plusRapide(Vehicule $vehicule): Vehicule{
        if($this->vitesse >= $vehicule->getVitesse()){
            return $this;
        }
        return $vehicule;
    }
}

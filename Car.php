<?php
require_once 'Vehicle.php';

Class Car extends Vehicle
 {
    // private int $nbWheels = 5;

    // private int $currentSpeed;

    private string $energy;

    private int $energyLevel;

    //constante pour définir que l'energie soit essence ou électrique

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',

    ];


    public function __construct(string $color, int $nbSeats , string $energy)
    {
        // $this->color = $color;
        // $this->nbSeats = $nbSeats;
        parent::__construct( $color, $nbSeats);
        // $this->energy = $energy;
        // verification de la nouvelle instanciation
        $this->setEnergy($energy);
    }  

  

    public function getEnergy(): string
    {
        return $this->energy;

    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    // public function setEnergyLevel(int $energyLevel): void

    // {

    //     $this->energyLevel = $energyLevel;

    // }

    // vérification pour savoir si l'énergie saisie fait partie de celle autorisée

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            # code...
            $this->energy = $energy;
        }
    }
    




}
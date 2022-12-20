<?php
require_once "Vehicle.php";

class Truck extends Vehicle
{   
    private string $energy;
    // private string $energyLevel;

    private int $storageCapacity;
    private int $lading = 0;


    public function __construct(int $storageCapacity, string $color, int $nbSeats , string $energy)
    {   
        $this->storageCapacity = $storageCapacity;
        parent::__construct($color , $nbSeats);
        $this->energy = $energy;
        
    }

    public function setIsCharged(int $lading)
    {
        $this->lading = $lading;

        if ($this->lading == 500)
        {
            
            return  "full";
        }
        else{
            return "in filling";
        }
      
    
    }

    public function getEnergy(): string
    {
        return $this->energy;

    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;

    }

    public function getLanding(): int
    {
        return $this->lading;

    }



}
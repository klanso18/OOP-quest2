<?php 

require_once 'Vehicle.php';

class Truck2 extends Vehicle
{
    private string $energy;
    private int $storageCapacity;
    private int $shipping = 0;
    private int $energyLevel; 

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function forward(): string
    {
        $this->currentSpeed = 50; 
        return "Go !"; 
    }

    public function brake(): string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

    public function start(): string
    {
        $sentence = "";
        while ($this->energyLevel > 0) {
            $sentence .= "Start !";
        }
        $sentence .= "Not enough energy to start"; 
        return $sentence; 
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function getShipping(): int
    {
        return $this->shipping;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel = 30;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function isItFull(): string
    {
        $sentence = "";
        while ($this->shipping < $this->storageCapacity) {
        $this->shipping++;
        $sentence .= "in filling !!";
    }
        $sentence .= "full !!";
        return $sentence;
    }
}
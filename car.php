<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
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

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel = 50;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}

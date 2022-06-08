<?php

namespace App\Challenge;

use App\Quest\Vehicle;

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'gasoline',
        'electric',
    ];
    private int $energyLevel = 20;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setNbWheels(4);
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

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start(): void
    {
        $this->currentSpeed = 15;
    }

    public function introduceProperties(): string
    {
        return "The {$this->getColor()} car have {$this->getNbSeats()} seats, {$this->getNbWheels()} wheels, and it runs on {$this->getEnergy()}";
    }
}

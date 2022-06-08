<?php

namespace App\Challenge;

use App\Quest\Vehicle;

class RunningEnergyVehicle extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'gasoline',
        'electric',
        'gasoil',
        'gaz'
    ];
    protected int $energyLevel = 20;
    protected string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $nbWheels)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
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

    public function setEnergy(string $energy): RunningEnergyVehicle
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

    protected function introduceProperties(?string $type = 'vehicle'): string
    {
        return "The {$this->getColor()} {$type} have {$this->getNbSeats()} seats, {$this->getNbWheels()} wheels, and it runs on {$this->getEnergy()}";
    }
}

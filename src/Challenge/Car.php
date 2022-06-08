<?php

namespace App\Challenge;

use App\Challenge\RunningEnergyVehicle;

class Car extends RunningEnergyVehicle
{
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, $energy, 4);
    }

    public function getParkBrakeState(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function introduceVehicle(): string
    {
        return parent::introduceProperties('car');
    }

    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new \Exception('The car have the park brake!');
        }
        $this->setCurrentSpeed(15);
        return "Start !";
    }
}

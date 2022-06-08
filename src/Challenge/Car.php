<?php

namespace App\Challenge;

use App\Challenge\RunningEnergyVehicle;

class Car extends RunningEnergyVehicle
{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, $energy, 4);
    }

    public function introduceVehicle(): string
    {
        return parent::introduceProperties('car');
    }
}

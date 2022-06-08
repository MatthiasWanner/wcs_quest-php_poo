<?php

namespace App\Challenge;

use App\Quest\Vehicle;


final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle): array
    {
        array_push($this->currentVehicles, $vehicle);
        return $this->getCurrentVehicles();
    }
}

<?php

namespace App\Challenge;

use App\Quest\Vehicle;
use App\Quest\Bicycle;
use App\Quest\SkateBoard;


final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicle(Vehicle $vehicle): array
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof SkateBoard) {
            array_push($this->currentVehicles, $vehicle);
        }
        return $this->getCurrentVehicles();
    }
}

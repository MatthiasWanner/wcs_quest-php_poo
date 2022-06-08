<?php

namespace App\Challenge;

use App\Quest\Vehicle;
use App\Quest\Bicycle;
use App\Quest\SkateBoard;


final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle): array
    {
        if (!($vehicle instanceof Bicycle) && !($vehicle instanceof SkateBoard)) {
            array_push($this->currentVehicles, $vehicle);
        }
        return $this->getCurrentVehicles();
    }
}

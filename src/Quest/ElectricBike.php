<?php

namespace App\Quest;

use App\Quest\Vehicle;
use App\Quest\RechargeableInterface;

class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function __construct(string $color)
    {
        parent::__construct($color, 1, 2);
    }

    public function charge(int $percentage): int
    {
        // you must implement this method
        return $percentage;
    }

    public function unLoad(int $percentage): int
    {
        // you must implement this method
        return $percentage;
    }
}

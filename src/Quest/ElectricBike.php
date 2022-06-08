<?php

namespace App\Quest;

use App\Quest\RechargeableInterface;

class ElectricBike extends Bicycle implements RechargeableInterface
{
    public function __construct(string $color)
    {
        parent::__construct($color, 1);
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

    public function switchOn(): bool
    {
        return true;
    }
}

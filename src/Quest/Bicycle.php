<?php

namespace App\Quest;

use App\Challenge\LightableInterface;
use App\Quest\Vehicle;

class Bicycle extends Vehicle implements LightableInterface
{
    public function __construct(string $color)
    {
        parent::__construct($color, 1, 2);
    }

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}

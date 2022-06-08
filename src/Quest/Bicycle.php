<?php

namespace App\Quest;

use App\Quest\Vehicle;

class Bicycle extends Vehicle
{
    public function __construct(string $color)
    {
        parent::__construct($color, 1, 2);
    }
}

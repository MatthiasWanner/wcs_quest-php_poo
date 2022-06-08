<?php

namespace App\Quest;

use App\Quest\Vehicle;

class SkateBoard extends Vehicle
{
    public function __construct()
    {
        parent::__construct('', 0, 4);
    }
}

<?php

namespace App\Quest;

class ChargingStation
{
    public function fullCharge(RechargeableInterface $vehicle)
    {
        return $vehicle->charge(100);
    }
}

<?php

namespace App\Challenge;

class Speedometer
{
    private const MILE_KM_CONVERSION_FACTOR = 1.60934;

    public static function convertMileToKm(float $distance): float
    {
        return round($distance * self::MILE_KM_CONVERSION_FACTOR, 2);
    }

    public static function convertKmToMiles(float $distance): float
    {
        return  round($distance / self::MILE_KM_CONVERSION_FACTOR, 2);
    }
}

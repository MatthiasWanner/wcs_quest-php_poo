<?php

namespace App\Challenge;

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private int $energyLevel = 20;

    public function __construct(private string $color, private int $nbSeats, private string $energy)
    {
    }

    public function forward()
    {
        $this->currentSpeed = 15;
    }

    public function brake()
    {
        $this->currentSpeed = 0;
    }

    public function start()
    {
        $this->currentSpeed = 15;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function introduceProperties()
    {
        return "The {$this->getColor()} car have {$this->getNbSeats()} seats, {$this->getNbWheels()} wheels, and it runs on {$this->getEnergy()}";
    }
}

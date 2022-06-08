<?php

namespace App\Challenge;

use App\Quest\Vehicle;

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLanes;
    protected int $maxSpeed;

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        $this->setNbLanes($nbLanes);
        $this->setMaxSpeed($maxSpeed);
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function getNbLanes(): int
    {
        return $this->nbLanes;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    protected function setNbLanes(int $nbLanes): void
    {
        $this->nbLanes = $nbLanes;
    }

    protected function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function setCurrentVehicules(array $vehicles): array
    {
        foreach ($vehicles as $vehicle) {
            $this->addVehicle($vehicle);
        }
        return $this->getCurrentVehicles();
    }

    abstract protected function addVehicle(Vehicle $vehicle): array;
}

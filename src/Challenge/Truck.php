<?php

namespace App\Challenge;

use App\Challenge\RunningEnergyVehicle;

/**
 * Class Truck
 * I choose to create another parent classe named RunningEnergyVehicle because Truck and Car have common properties
 */
class Truck extends RunningEnergyVehicle
{
    private int $storageCapacity;
    private int $currentStorage = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy, 6);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function getCurrentStorage(): int
    {
        return $this->currentStorage;
    }

    public function setCurrentStorage(int $storage): void
    {
        if ($storage >= 0 && $storage <= $this->storageCapacity) {
            $this->currentStorage = $storage;
        }
    }

    // I use a private internal function by default to implement logic later if needed
    private function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageState(): string
    {
        if ($this->currentStorage < $this->storageCapacity) {
            return "in filling";
        } else {
            return "full";
        }
    }

    public function introduceVehicle(): string
    {
        $originalSentence = parent::introduceProperties('truck');
        return "{$originalSentence} and it can store {$this->getStorageCapacity()}";
    }
}

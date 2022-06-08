<?php

namespace App\Challenge;

interface LightableInterface
{
    public function switchOn(): bool;
    public function switchOff(): bool;
}

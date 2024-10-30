<?php

namespace App\State\DirectionService;

class DirectionService
{
    private ITravelMode $travelMode;
    public function getETA(): int
    {
        return $this->travelMode->getETA();
    }

    public function getDirection(): int
    {
        return $this->travelMode->getDirection();
    }

    public function getTravelMode(): ITravelMode
    {
        return $this->travelMode;
    }

    public function setTravelMode(ITravelMode $travelMode): void
    {
        $this->travelMode = $travelMode;
    }
}
<?php

namespace App\Adapter\Vehicle;

abstract class Vehicle
{
    private $brand;
    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    abstract public function getSpeedMPH();

    public function __toString()
    {
        return "{$this->brand} : {$this->getSpeedMPH()} MPH";
    }
}
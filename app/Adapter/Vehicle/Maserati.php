<?php

namespace App\Adapter\Vehicle;

use App\Adapter\Vehicle\Vehicle;

class Maserati extends Vehicle
{

    public function getSpeedMPH()
    {
        return 200;
    }
}
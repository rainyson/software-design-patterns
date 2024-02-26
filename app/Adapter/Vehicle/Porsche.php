<?php

namespace App\Adapter\Vehicle;

use App\Adapter\Vehicle\Vehicle;

class Porsche extends Vehicle
{

    public function getSpeedMPH()
    {
        return 220;
    }
}
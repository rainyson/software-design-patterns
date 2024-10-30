<?php

namespace App\Adapter\Vehicle;

use App\Adapter\Vehicle\Vehicle;

class Bugatti extends Vehicle
{

    public function getSpeedMPH()
    {
        return 240;
    }
}
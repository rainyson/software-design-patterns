<?php

namespace App\Strategy;

use App\Strategy\ITravel;

class Bus implements ITravel
{

    public function tripWith()
    {
        return 'with Hamsafar Bus in terminal';
    }
}
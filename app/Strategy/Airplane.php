<?php

namespace App\Strategy;

class Airplane implements ITravel
{
    public function tripWith()
    {
        return 'with Airplane in airport';
    }
}
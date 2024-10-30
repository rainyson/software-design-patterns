<?php

namespace App\Strategy\Travel;

class Airplane implements ITravel
{
    public function tripWith()
    {
        return 'with Airplane in airport';
    }
}
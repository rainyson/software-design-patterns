<?php

namespace App\Strategy\Travel;

class Bus implements ITravel
{

    public function tripWith()
    {
        return 'with Hamsafar Bus in terminal';
    }
}
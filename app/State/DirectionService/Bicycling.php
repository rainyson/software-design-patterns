<?php

namespace App\State\DirectionService;

class Bicycling implements ITravelMode
{

    public function getETA(): int
    {
        print_r('Calculating ETA (bicycling)');
        return 2;
    }

    public function getDirection(): int
    {
        print_r('Calculating Direction (bicycling)');
        return 2;
    }
}
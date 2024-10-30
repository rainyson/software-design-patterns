<?php

namespace App\State\DirectionService;

class Driving implements ITravelMode
{

    public function getETA(): int
    {
        print_r('Calculating ETA (driving)');
        return 1;
    }

    public function getDirection(): int
    {
        print_r('Calculating Direction (driving)');
        return 1;
    }
}
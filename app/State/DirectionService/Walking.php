<?php

namespace App\State\DirectionService;

class Walking implements ITravelMode
{

    public function getETA(): int
    {
        print_r('Calculating ETA (walking)');
        return 4;
    }

    public function getDirection(): int
    {
        print_r('Calculating Direction (walking)');
        return 4;
    }
}
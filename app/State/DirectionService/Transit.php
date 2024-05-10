<?php

namespace App\State\DirectionService;

class Transit implements ITravelMode
{

    public function getETA(): int
    {
        print_r('Calculating ETA (transit)');
        return 3;
    }

    public function getDirection(): int
    {
        print_r('Calculating Direction (transit)');
        return 3;
    }
}
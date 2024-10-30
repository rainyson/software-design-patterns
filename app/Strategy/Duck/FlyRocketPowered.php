<?php

namespace App\Strategy\Duck;

class FlyRocketPowered implements FlyBehavior
{

    public function fly(): void
    {
        print_r("I can fly with rocket powered\n");
    }
}
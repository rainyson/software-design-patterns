<?php

namespace App\Strategy\Duck;

class FlyWithWings implements FlyBehavior
{

    public function fly(): void
    {
        print_r("I can fly with wings\n");
    }
}
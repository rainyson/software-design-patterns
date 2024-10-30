<?php

namespace App\Strategy\Duck;

use App\Strategy\Duck\FlyBehavior;

class FlyNoWay implements FlyBehavior
{

    public function fly(): void
    {
        print_r("I can't fly\n");
    }
}
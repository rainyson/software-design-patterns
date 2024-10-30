<?php

namespace App\Strategy\Duck;

class Squeak implements QuackBehavior
{

    public function quack(): void
    {
        print_r("Squeak\n");
    }
}
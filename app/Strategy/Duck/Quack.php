<?php

namespace App\Strategy\Duck;

class Quack implements QuackBehavior
{

    public function quack(): void
    {
        print_r("Quack\n");
    }
}
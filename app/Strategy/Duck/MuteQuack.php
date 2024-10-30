<?php

namespace App\Strategy\Duck;

class MuteQuack implements QuackBehavior
{

    public function quack(): void
    {
        print_r("<< Silence >>\n");
    }
}
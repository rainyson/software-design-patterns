<?php

namespace App\Strategy\Travel;

class Car implements ITravel
{
    public function tripWith()
    {
        return 'with own car';
    }
}
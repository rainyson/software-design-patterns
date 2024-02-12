<?php

namespace App\Strategy;

class Car implements ITravel
{
    public function tripWith()
    {
        return 'with own car';
    }
}
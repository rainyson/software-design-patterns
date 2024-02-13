<?php

namespace App\FactoryMethod\Transport;

class Truck implements ITransport
{
    public function deliver($place)
    {
        return $place;
    }
}
<?php

namespace App\AbstractFactory\Transport;

class Truck implements ITransport
{
    public function deliver($place)
    {
        return $place;
    }
}
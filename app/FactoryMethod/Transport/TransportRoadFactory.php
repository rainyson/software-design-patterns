<?php

namespace App\FactoryMethod\Transport;

class TransportRoadFactory extends LogisticFactory
{
    public function createTransport()
    {
        return new Truck();
    }
}
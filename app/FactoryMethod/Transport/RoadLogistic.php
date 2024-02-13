<?php

namespace App\FactoryMethod\Transport;

class RoadLogistic extends LogisticFactory
{

    public function createTransport()
    {
        return new Truck();
    }
}
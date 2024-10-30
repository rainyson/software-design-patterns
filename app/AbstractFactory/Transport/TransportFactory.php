<?php

namespace App\AbstractFactory\Transport;

class TransportFactory extends ATransportFactory
{

    public function createRoadTransport()
    {
        return new Truck();
    }

    public function createSeaTransport()
    {
        return new Ship();
    }
}
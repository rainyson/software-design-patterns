<?php

namespace App\FactoryMethod\Transport;

class Ship implements ITransport
{

    public function deliver($place)
    {
       return $place;
    }
}
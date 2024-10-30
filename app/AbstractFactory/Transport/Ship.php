<?php

namespace App\AbstractFactory\Transport;

class Ship implements ITransport
{

    public function deliver($place)
    {
       return $place;
    }
}
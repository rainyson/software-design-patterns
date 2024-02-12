<?php

namespace App\Strategy;

class Traveler
{
    public function __construct()
    {

    }

    public function goTrip(ITravel $travel)
    {
        return 'I go to trip ' . $travel->tripWith();
    }
}
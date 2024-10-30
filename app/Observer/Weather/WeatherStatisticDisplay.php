<?php

namespace App\Observer\Weather;

class WeatherStatisticDisplay implements IWeatherObserver, IWeatherDisplay
{
    public function update(float $humidity, float $temperature, float $pressure)
    {

    }

    public function display(): void
    {

    }
}
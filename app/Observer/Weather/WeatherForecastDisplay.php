<?php

namespace App\Observer\Weather;

class WeatherForecastDisplay implements IWeatherObserver, IWeatherDisplay
{
    public function update(float $humidity, float $temperature, float $pressure)
    {

    }

    public function display(): void
    {

    }
}
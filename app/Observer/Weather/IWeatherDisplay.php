<?php

namespace App\Observer\Weather;

interface IWeatherDisplay
{
    public function display(): void;
}
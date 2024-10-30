<?php

namespace App\State\DirectionService;

interface ITravelMode
{
    public function getETA(): int;
    public function getDirection(): int;
}
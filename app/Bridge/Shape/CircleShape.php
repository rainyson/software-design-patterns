<?php

namespace App\Bridge\Shape;

class CircleShape extends Shape
{
    public function draw()
    {
        return $this->color;
    }
}
<?php

namespace App\Bridge\Shape;

class SquareShape extends Shape
{
    public function draw()
    {
        return $this->color;
    }
}
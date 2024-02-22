<?php

namespace App\Bridge\Shape;

abstract class Shape
{
    protected $width, $height, $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function draw();

    public function changeColor(Color $color)
    {
        $this->color = $color;
    }
}
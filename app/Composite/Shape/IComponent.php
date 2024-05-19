<?php

namespace App\Composite\Shape;

interface IComponent
{
    public function render();
    public function move();
}
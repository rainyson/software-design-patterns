<?php

namespace App\Composite\Shape;

class Shape implements IComponent
{

    public function render(): void
    {
        echo "render shape <br />";
    }

    public function move(): void
    {
       echo "move shape <br />";
    }
}
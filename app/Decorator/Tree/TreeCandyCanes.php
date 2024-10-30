<?php

namespace App\Decorator\Tree;

class TreeCandyCanes extends TreeDecorator
{
    public function leafing()
    {
        return $this->tree->leafing() . " with delicious candy canes";
    }
}
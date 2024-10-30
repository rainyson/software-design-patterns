<?php

namespace App\Decorator\Tree;

class TreeLights extends TreeDecorator
{

    public function leafing()
    {
        return $this->tree->leafing() . " with lots of Lights";
    }
}
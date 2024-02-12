<?php

namespace App\Decorator\Tree;

class TreeGarland extends TreeDecorator
{
    public function leafing()
    {
        return $this->tree->leafing() . " with beautiful Garlands";
    }
}
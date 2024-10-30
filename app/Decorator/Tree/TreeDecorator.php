<?php

namespace App\Decorator\Tree;

abstract class TreeDecorator implements ITree
{
    protected $tree;
    public function __construct(ITree $tree)
    {
        $this->tree = $tree;
    }

    public abstract function leafing();
}
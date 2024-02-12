<?php

namespace App\Decorator\Tree;

class ChristmasTree implements ITree
{
    public function leafing()
    {
        return "this is green pine leaf";
    }
}
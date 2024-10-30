<?php

namespace App\Prototype\Editor;

interface IComponent
{
    public function clone(): IComponent;
}
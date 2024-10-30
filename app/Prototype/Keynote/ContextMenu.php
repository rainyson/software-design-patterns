<?php

namespace App\Prototype\Keynote;

class ContextMenu
{
    public function duplicate(IComponent $component): void
    {
       $newComponent = $component->clone();
    }
}
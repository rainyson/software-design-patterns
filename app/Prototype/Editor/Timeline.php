<?php

namespace App\Prototype\Editor;

class Timeline
{
    private array $components = [];

    public function add(IComponent $component): void
    {
        $this->components[] = $component;
    }
}
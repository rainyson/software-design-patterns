<?php

namespace App\Composite\Incident;

class Team implements IComponent
{
    private array $components = [];

    public function add(IComponent $component): void
    {
        $this->components[] = $component;
    }

    public function deploy(): void
    {
        foreach ($this->components as $component) {
            $component->deploy();
        }
    }
}
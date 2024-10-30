<?php

namespace App\Composite\Shape;

class Group implements IComponent
{
    private array $components = [];

    public function add(IComponent $component): void
    {
        $this->components[] = $component;
    }

    public function render(): void
    {
        foreach ($this->components as $component) {
            $component->render();
        }
    }

    public function move(): void
    {
        foreach ($this->components as $component) {
            $component->move();
        }
    }
}
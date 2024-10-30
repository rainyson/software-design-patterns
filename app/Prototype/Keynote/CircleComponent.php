<?php

namespace App\Prototype\Keynote;

class CircleComponent implements IComponent
{
    private int $radius;

    public function render(): void
    {
        echo "Render a Circle";
    }

    public function clone(): IComponent
    {
        $newCircle = new CircleComponent();
        $newCircle->setRadius($this->getRadius());
        return $newCircle;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }
}
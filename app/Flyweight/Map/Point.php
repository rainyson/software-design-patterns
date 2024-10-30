<?php

namespace App\Flyweight\Map;

class Point
{
    private int $x, $y;
    private PointIcon $pointIcon;

    /**
     * @param int $x
     * @param int $y
     * @param PointIcon $pointIcon
     */
    public function __construct(int $x, int $y, PointIcon $pointIcon)
    {
        $this->x = $x;
        $this->y = $y;
        $this->pointIcon = $pointIcon;
    }

    public function draw(): void
    {
        printf('%s at (%d, %d)', $this->pointIcon->getPointType(), $this->x, $this->y);
    }


}
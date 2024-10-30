<?php

namespace App\Flyweight\Map;

class PointIcon
{
    private readonly PointType $pointType;
    private readonly string $pointIcon;

    /**
     * @param PointType $pointType
     * @param string $pointIcon
     */
    public function __construct(PointType $pointType, string $pointIcon)
    {
        $this->pointType = $pointType;
        $this->pointIcon = $pointIcon;
    }

    public function getPointType(): string
    {
        return $this->pointType->name;
    }

}
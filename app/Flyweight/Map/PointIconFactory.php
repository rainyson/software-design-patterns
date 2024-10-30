<?php

namespace App\Flyweight\Map;

class PointIconFactory
{
    private array $pointIcons = [];

    public function getPointIcon(PointType $pointType)
    {
        $pointTypeName = $pointType->name;
        if(!isset($this->pointIcons[$pointTypeName])){
            $this->pointIcons[$pointTypeName] = new PointIcon($pointType,'lkjkljlk');
        }
        return $this->pointIcons[$pointTypeName];
    }
}
<?php

namespace App\Flyweight\Map;

class PointService
{
    private array $points = [];
    private PointIconFactory $pointIconFactory;

    /**
     * @param PointIconFactory $pointIconFactory
     */
    public function __construct(PointIconFactory $pointIconFactory)
    {
        $this->pointIconFactory = $pointIconFactory;
    }


    public function getPoints(): array
    {
        $pointIcon = $this->pointIconFactory->getPointIcon(PointType::CAFE);
        $this->points[] = new Point(1, 2, $pointIcon);
        return $this->points;
    }
}
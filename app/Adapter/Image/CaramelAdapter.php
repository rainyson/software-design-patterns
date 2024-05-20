<?php

namespace App\Adapter\Image;

use App\Adapter\Image\IFilter;
use App\Adapter\Image\pixelFilters\CaramelFilter;

class CaramelAdapter implements IFilter
{
    private CaramelFilter $caramelFilter;

    public function __construct(CaramelFilter $caramelFilter)
    {
        $this->caramelFilter = $caramelFilter;
    }

    public function apply(Image $image)
    {
        $this->caramelFilter->init($image);
        $this->caramelFilter->render();
    }
}
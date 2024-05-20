<?php

namespace App\Adapter\Image\pixelFilters;

use App\Adapter\Image\Image;

class CaramelFilter
{
    private Image $image;

    public function init(Image $image): void
    {
        $this->image = $image;
    }

    public function render(): void
    {
        echo "applying caramel filter <br />";
    }
}
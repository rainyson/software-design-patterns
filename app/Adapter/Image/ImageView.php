<?php

namespace App\Adapter\Image;

class ImageView
{
    private Image $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function apply(IFilter $filter): void
    {
        $filter->apply($this->image);
    }
}
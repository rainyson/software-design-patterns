<?php

namespace App\Adapter\Image;

interface IFilter
{
    public function apply(Image $image);
}
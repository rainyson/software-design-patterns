<?php

namespace App\Strategy\Image;

use App\Strategy\Image\IFilter;

class BWFilter implements IFilter
{

    public function apply(string $filename)
    {
        echo "implement Black and White Filter";
    }
}
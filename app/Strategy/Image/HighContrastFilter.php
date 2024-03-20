<?php

namespace App\Strategy\Image;

use App\Strategy\Image\IFilter;

class HighContrastFilter implements IFilter
{

    public function apply(string $filename)
    {
        echo "implement High Contrast Filter";
    }
}
<?php

namespace App\Adapter\Image;

class VividFilter implements IFilter
{

    public function apply(Image $image): void
    {
        echo "Applying Vivid Filter <br />";
    }
}
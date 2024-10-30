<?php

namespace App\Strategy\Image;

class ImageStorage
{

    public function store(string $filename, ICompressor $compressor, IFilter $filter)
    {
        $compressor->compress($filename);

        $filter->apply($filename);
    }
}
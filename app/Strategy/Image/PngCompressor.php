<?php

namespace App\Strategy\Image;

use App\Strategy\Image\ICompressor;

class PngCompressor implements ICompressor
{

    public function compress(string $filename)
    {
        echo 'Compress Image using PNG';
    }
}
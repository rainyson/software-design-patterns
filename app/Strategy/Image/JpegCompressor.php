<?php

namespace App\Strategy\Image;

use App\Strategy\Image\ICompressor;

class JpegCompressor implements ICompressor
{
    public function compress(string $filename)
    {
        echo 'Compress Image using JPEG';
    }
}
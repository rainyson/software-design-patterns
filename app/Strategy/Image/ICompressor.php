<?php

namespace App\Strategy\Image;

interface ICompressor
{
    public function compress(string $filename);
}
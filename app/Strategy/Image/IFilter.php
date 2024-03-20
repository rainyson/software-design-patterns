<?php

namespace App\Strategy\Image;

interface IFilter
{
    public function apply(string $filename);
}
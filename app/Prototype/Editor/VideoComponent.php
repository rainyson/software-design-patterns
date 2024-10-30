<?php

namespace App\Prototype\Editor;

class VideoComponent implements IComponent
{

    public function clone(): IComponent
    {
        return new VideoComponent();
    }
}
<?php

namespace App\Prototype\Editor;

class AudioComponent implements IComponent
{

    public function clone(): IComponent
    {
        return new AudioComponent();
    }
}
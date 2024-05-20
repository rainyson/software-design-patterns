<?php

namespace App\Decorator\Editor;

class Artefact implements IArtefact
{

    public function render(string $data): void
    {
        printf('%s', $data);
    }
}
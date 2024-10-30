<?php

namespace App\Decorator\Editor;

interface IArtefact
{
    public function render(string $data): void;
}
<?php

namespace App\Prototype\Keynote;

interface IComponent
{
    public function render(): void;

    public function clone(): IComponent;
}
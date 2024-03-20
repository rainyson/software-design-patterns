<?php

namespace App\Iterator\Browser;

interface IIterator
{
    public function current(): string;

    public function next(): void;

    public function hasNext(): bool;
}
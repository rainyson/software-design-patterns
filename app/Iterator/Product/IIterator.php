<?php

namespace App\Iterator\Product;

interface IIterator
{
    public function next(): void;
    public function hasNext(): bool;
    public function current(): Product;
}
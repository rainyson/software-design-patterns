<?php

namespace App\Iterator\Product;

class ProductIterator implements IIterator
{
    private int $index;
    public function __construct(private ProductCollection $productCollection)
    {
        $this->index = 0;
    }

    public function next(): void
    {
        $this->index++;
    }

    public function hasNext(): bool
    {
        return $this->index < count($this->productCollection->getProducts());
    }

    public function current(): Product
    {
        return $this->productCollection->getProducts()[$this->index];
    }
}
<?php

namespace App\Iterator\Product;

class ProductCollection
{
    private array $products = [];

    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function createIterator(): IIterator
    {
        return new ProductIterator($this);
    }
}
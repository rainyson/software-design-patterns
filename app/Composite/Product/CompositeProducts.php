<?php

namespace App\Composite\Product;

use App\Composite\Product\IProduct;

class CompositeProducts implements IProduct
{
    protected $products = [];

    public function add(IProduct $product)
    {
        $this->products[] = $product;
    }

    public function remove(IProduct $product)
    {
        $this->products = array_filter($this->products, function ($prod) use ($product) {
            return $prod != $product;
        });
    }

    public function generatePrice()
    {
        $results = 0;
        foreach ($this->products as $product) {
            $results += $product->generatePrice();
        }
        return $results;
    }
}
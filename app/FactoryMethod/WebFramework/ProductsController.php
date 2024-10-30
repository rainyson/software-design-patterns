<?php

namespace App\FactoryMethod\WebFramework;

use App\FactoryMethod\WebFramework\Mocha\Controller;

class ProductsController extends SharpsController
{
    public function getProducts()
    {
        // Get Products from database
        $products = [
            'product1' => 1
        ];
        $this->render('products.html', $products);
    }

}
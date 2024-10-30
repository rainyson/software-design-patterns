<?php

namespace App\Composite\Product;

use App\Composite\Product\IProduct;

class HammerProduct implements IProduct
{

    public function generatePrice()
    {
        return 1000;
    }
}
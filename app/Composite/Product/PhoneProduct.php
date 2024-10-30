<?php

namespace App\Composite\Product;

use App\Composite\Product\IProduct;

class PhoneProduct implements IProduct
{

    public function generatePrice()
    {
        return 20000;
    }
}
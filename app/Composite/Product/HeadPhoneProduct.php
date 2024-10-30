<?php

namespace App\Composite\Product;

use App\Composite\Product\IProduct;

class HeadPhoneProduct implements IProduct
{

    public function generatePrice()
    {
        return 30000;
    }
}
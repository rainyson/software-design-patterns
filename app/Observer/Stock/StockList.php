<?php

namespace App\Observer\Stock;

class StockList implements IObserver
{
    private StockPrice $stockPrice;

    public function __construct(StockPrice $stockPrice)
    {
        $this->stockPrice = $stockPrice;
    }

    public function update(): void
    {
        echo "Stock List Got Updated: {$this->stockPrice->getPrice()} <br />";
    }
}
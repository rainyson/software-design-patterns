<?php

namespace App\Observer\Stock;

class StatusBar implements IObserver
{
    private StockPrice $stockPrice;

    public function __construct(StockPrice $stockPrice)
    {
        $this->stockPrice = $stockPrice;
    }

    public function update(): void
    {
        echo "Status Bar Got Updated: {$this->stockPrice->getPrice()} <br />";
    }
}
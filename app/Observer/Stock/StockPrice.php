<?php

namespace App\Observer\Stock;

class StockPrice extends Subject
{
    private int $price;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
        $this->notify();
    }
}
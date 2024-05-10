<?php

namespace App\Iterator\Product;

class Product
{
    public function __construct(private int $id, private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function __toString()
    {
        return "{
            Product ID: {$this->id},
            Product Name: {$this->name}
        } </br>";
    }
}
<?php

namespace App\Proxy\ORM;

class DBContext
{
    private array $updatedObjects = [];

    public function getProduct(int $id): Product
    {
        printf("SELECT * FROM products WHERE product_id = %d \n", $id);
        $product = new Product($id);
        $product->setName('Product 1');
        return $product;
    }

    public function saveChanges(): void
    {
        foreach ($this->updatedObjects as $updatedObject) {
            printf("UPDATE products SET name = '%s' WHERE product_id = %d \n", $updatedObject->getName(), $updatedObject->getId());
        }
        $this->updatedObjects = [];
    }

    public function markAsChanged(Product $product): void
    {
        $this->updatedObjects[$product->getId()] = $product;
    }
}
<?php

namespace Application\Services;

use App\Product;

class ProductService
{

    public function create(string $name, string $description ,float $price, int $stock)
    {
        $product = new Product();
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        $product->setStock($stock);

        $product->save();
    }

    public function findAll()
    {
        return Product::all();
    }

}

<?php

namespace Application\Services;

use App\Product;
use Application\Services\Interfaces\ProductServiceInterface;

class ProductService implements ProductServiceInterface
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

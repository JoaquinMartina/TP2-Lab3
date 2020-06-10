<?php

namespace Infrastructure\Persistence\Eloquent\Repositories;

use Domain\Entities\Product;
use Domain\Interfaces\Repository\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function save(Product $product): void
    {
        $product->save();
    }

    public function all()
    {
        return Product::all();
    }
}

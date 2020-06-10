<?php

namespace Infrastructure\Persistence\Eloquent\Repositories;

use Domain\Entities\Product;
use Domain\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function save(Product $product): void
    {
        $this->product->save();
    }

    public function all(): array
    {
        return $this->product::all();
    }
}

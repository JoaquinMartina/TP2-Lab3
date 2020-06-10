<?php

namespace Domain\Interfaces\Repository;

use Domain\Entities\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): void;
    public function all();
}

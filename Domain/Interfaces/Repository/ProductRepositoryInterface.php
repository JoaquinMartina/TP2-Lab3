<?php

namespace Domain\Interfaces;

use Domain\Entities\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): void;
    public function all(): array;
}

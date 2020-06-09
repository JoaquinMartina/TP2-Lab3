<?php

namespace Application\Services\Interfaces;

interface ProductServiceInterface
{
    public function create(string $name, string $description, float $price, int $stock);
    public function findAll();
}

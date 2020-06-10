<?php

namespace Application\Services;

use Domain\Entities\Product;
use Application\Services\Interfaces\ProductServiceInterface;
use Infrastructure\Persistence\Eloquent\Repositories\ProductRepository;

class ProductService implements ProductServiceInterface
{
    private $product;
    private $repository;

    public function __construct(Product $product,ProductRepository $repository)
    {
        $this->product = $product;
        $this->repository = $repository;
    }

    public function create(string $name, string $description ,float $price, int $stock)
    {
        $this->product->setName($name);
        $this->product->setDescription($description);
        $this->product->setPrice($price);
        $this->product->setStock($stock);

        $this->repository->save($this->product);
    }

    public function findAll()
    {
        return $this->repository->all();
    }

}

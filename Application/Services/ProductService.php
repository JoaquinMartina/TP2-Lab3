<?php

namespace Application\Services;

use Domain\Entities\Product;
use Application\Services\Interfaces\ProductServiceInterface;
use Infrastructure\Persistence\Eloquent\Repositories\ProductRepository;

class ProductService implements ProductServiceInterface
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }


    public function create(string $name, string $description ,float $price, int $stock)
    {
        //Todo validations exceptions

        $product = new Product();
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        $product->setStock($stock);

        $this->repository->save($product);
    }

    public function findAll()
    {
        return $this->repository->all();
    }

}

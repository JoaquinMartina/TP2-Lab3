<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function __construct()
    {

    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }

    public function getId(): int
    {
        return $this->Id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }
}

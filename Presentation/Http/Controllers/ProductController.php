<?php

namespace Presentation\Http\Controllers;

use Application\Services\Interfaces\ProductServiceInterface;
use Application\Services\ProductService;
use Presentation\Http\Requests\ProductsFormRequest;
use App\Product;

class ProductController extends Controller
{

    /** @var ProductServiceInterface */
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function showForm()
    {
        return view('productForm');
    }

    public function sendForm(ProductsFormRequest $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $stock = $request->input('stock');

        $this->productService->create($name, $description, $price, $stock);

        return $this->showList();

    }

    public function showList()
    {
        $products = $this->productService->findAll();
        return view('productList', ['products' => $products]);
    }

}

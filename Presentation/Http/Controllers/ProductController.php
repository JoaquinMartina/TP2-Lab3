<?php

namespace Presentation\Http\Controllers;

use Application\Services\ProductService;
use Presentation\Http\Requests\ProductsFormRequest;
use App\Product;

class ProductController extends Controller
{

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

        $productService = new ProductService();
        $productService->create($name, $description, $price, $stock);

        return $this->showList();

    }

    public function showList()
    {
        $productService = new ProductService();
        $products = $productService->findAll();
        return view('productList', ['products' => $products]);
    }

}

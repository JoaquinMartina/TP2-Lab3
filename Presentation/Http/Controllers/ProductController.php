<?php

namespace Presentation\Http\Controllers;

use Presentation\Http\Requests\ProductsFormRequest;
use App\Product;

class ProductController extends Controller
{
    public function showForm()
    {
        return view('productForm');
    }

    public function sendFormCreate(ProductsFormRequest $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $stock = $request->input('stock');

        $product = new Product();
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        $product->setStock($stock);

        $product->save();

        return $this->showList();

    }

    public function showList()
    {
        $products = Product::all();
        return view('productList', ['products' => $products]);
    }

}

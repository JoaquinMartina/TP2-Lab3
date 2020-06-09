<?php

namespace Presentation\Http\Controllers;

use Presentation\Http\Requests\ProductsFormRequest;

class ProductFormController extends Controller
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

        return view('correct');
    }
}

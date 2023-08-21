<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts()
    {
        return view('products');
    }
    public function addProduct(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:products',
                'price' => 'required',
            ],
            [
                'name.required' => 'Name field is Required',
                'name.unique' => 'Product Already Exists',
                'price.required' => 'Price field is Required'
            ]
        );
    }
}

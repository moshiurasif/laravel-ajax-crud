<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function allProducts()
    {
        $products = Product::latest()->simplePaginate(5);
        return view('products', compact('products'));
    }

    // add product
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

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    // update product
    public function updateProduct(Request $request)
    {
        try {
            $request->validate(
                [
                    'up_name' => 'required|unique:products,name,' . $request->up_id,
                    'up_price' => 'required',
                ],
                [
                    'up_name.required' => 'Name field is Required',
                    'up_name.unique' => 'Product Already Exists',
                    'up_price.required' => 'Price field is Required'
                ]
            );

            Product::where('id', $request->up_id)->update([
                'name' => $request->up_name,
                'price' => $request->up_price,
            ]);
            return response()->json([
                'status' => 'success'
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred during product update.'
            ], 500);
        }
    }
}

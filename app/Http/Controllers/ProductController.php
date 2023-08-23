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
    }
    // delete product
    public function deleteProduct(Request $request)
    {
        Product::find($request->product_id)->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
    // pagination
    public function pagination(Request $request)
    {
        $products = Product::latest()->simplePaginate(5);
        return view('pagination_products', compact('products'))->render();
    }

    // search
    public function searchProduct(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->search_string . '%')->orWhere('price', 'like', '%' . $request->search_product . '%')->orderBy('id', 'desc')->simplePaginate(5);
        if ($products->count() >= 1) {
            return view('pagination_products', compact('products'))->render();
        } else {
            return response()->json([
                'status' => 'nothing_found'
            ]);
        }
    }
}

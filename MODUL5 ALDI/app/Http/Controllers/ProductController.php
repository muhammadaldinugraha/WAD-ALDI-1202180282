<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function addProduct(Request $request) 
    {
        $uploadimage = $request->image->store('public');

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $uploadimage;
        $product->save();

        return redirect(route('product'));
    }

    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return redirect(route('product'));
    }

    public function updateProduct($id)
    {
        $product = Product::find($id);
        return view('updateProduct', compact('product'));
    }


    
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('order', compact('products'));
    }

    public function processOrder($id)
    {
        $product = Product::find($id);
        return view('processOrder', compact('product'));
    }

    public function processOrderPost($product_id, Request $request)
    {
        $order = new Order;
        $order->product_id = $product_id;
        $order->amount = $request->quantity;
        $order->buyer_name = $request->name;
        $order->buyer_contact = $request->contact;

        $order->save();
        return redirect(route('history'));
    }

    public function history()
    {
        $orders = Order::all();
        return view('history', compact('orders'));
    }

}

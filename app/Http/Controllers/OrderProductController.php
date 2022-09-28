<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\OrderRequest;
use App\Models\Product;

class OrderProductController extends Controller
{
    public function store(Request $request, $id)
    {
        $order = Order::where('id',$id)->first();
        $order->products()->attach($request->get('product_id'));
        return redirect()->route('cardapio.show', $order->id);
    }

    public function destroy($order_id, $product_id)
    {
        $order = Order::where('id',$order_id)->first(); //
        $product = Product::where('id',$product_id)->first();
        $order->products()->detach($product->id);
        return redirect()->route('cardapio.show', $order->id);
    }
}

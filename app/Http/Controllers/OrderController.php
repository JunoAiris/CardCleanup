<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\OrderRequest;
use App\Models\Menu;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('establishment_id', \Auth::user()->establishment_id)->get();

        return view('orders.index',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $data = $request->validated();

        $data['establishment_id'] = \Auth::user()->establishment_id;

        $data['total_value'] = (int) ($data['total_value']*100);

        Order::create($data);

        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id)
     {
       $order = Order::where('id',$id)->first();
       $addableProducts = Product::where('establishment_id', $order->establishment_id)
         ->whereDoesntHave('orders', function($query) use ($order) {
           $query->where('orders.id', $order->id);
         })
         ->get();
       dd($order->products);
       return view('orders.show',['order' => $order, 'addableProducts' => $addableProducts]);
     }

     public function showPublic(Order $order, $id)
     {
       $product = Product::where('establishment_id', $order->establishment_id)
        ->whereHas('orders', function($query) use ($order) {
           $query->where('orders.id', $order->id);
         })
         ->get();
       return view('orders.public.show', ['order' => $order, 'product' => $product, 'menu' => $menu,]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::where('id',$id)->first();

        return view('orders.edit',['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderRequest $request, $id)
    {
      $order = Order::where('id',$id)->first();

      $data = $request->validated();

      $order->update ($data);

      return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $order = Order::where('id',$id)->first();

      $order->delete();

      return redirect()->route('pedidos.index');
    }
}

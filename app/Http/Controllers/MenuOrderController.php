<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use App\Models\Order;

class MenuOrderController extends Controller
{
    public function store(Request $request, $id)
    {
        $menu = Menu::where('id',$id)->first();
        $menu->products()->attach($request->get('order_id'));
        return redirect()->route('cardapios.show', $menu->id);
    }

    public function destroy($menu_id, $product_id)
    {
        $menu = Menu::where('id',$menu_id)->first(); //
        $product = Product::where('id',$product_id)->first();
        $menu->products()->detach($product->id);
        return redirect()->route('cardapios.show', $menu->id);
    }
}

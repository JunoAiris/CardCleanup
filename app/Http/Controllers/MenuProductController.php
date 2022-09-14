<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use App\Models\Product;

class MenuProductController extends Controller
{
    public function store(Request $request, $id)
    {
        $menu = Menu::where('id',$id)->first();
        $menu->products()->attach($request->get('product_id'));
        return redirect()->route('cardapios.show', $menu->id);
    }

    public function destroy(Menu $menu, Product $product)
    {
        $menu->products()->detach($product->id);
        return redirect()->route('cardapios.show', $menu->id);
    }
}

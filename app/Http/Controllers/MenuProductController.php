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

    public function destroy($menu_id, $product_id)
    {
        $menu = Menu::where('id',$menu_id)->first(); //I swear to god, this band-aid is starting to piss me off but Laravel refuses to work without it
        $product = Product::where('id',$product_id)->first(); // OH COOL, IT'S MULTIPLYING NOW, WHERE DID I GO WRONG?
        $menu->products()->detach($product->id);
        return redirect()->route('cardapios.show', $menu->id);
    }
}

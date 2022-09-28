<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use App\Models\Product;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('establishment_id', \Auth::user()->establishment_id)->get();

        return view('menus.index', ['menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();

        $menu = Menu::create($data);

        $active = isset($data['is_active'])?'1':'0';

        $data['is_active'] = $active;

        if($request->hasFile('image')){
          $imageFile = $request->file('image');

          $menu->update([
            'image_path' => $imageFile->storeAs(
              "images/products/$menu->id",
              'image.jpg',
              'public',
            )
          ]);
        }

        return redirect()->route('cardapios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::where('id',$id)->first();
        // dd($menu);
        $addableProducts = Product::where('establishment_id', $menu->establishment_id)
          ->whereDoesntHave('menus', function($query) use ($menu) {
            $query->where('menus.id', $menu->id);
          })
          ->get();
        return view('menus.show',['menu' => $menu, 'addableProducts' => $addableProducts]);
    }

    public function showPublic(Menu $menu)
    {
      return view('menus.public.show', ['menu'=>$menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::where('id',$id)->first();

        return view('menus.edit', ['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {

        $menu = Menu::where('id',$id)->first();

        $data = $request->validated();

        $menu->update($data);

        return redirect()->route('cardapios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::where('id',$id)->first();

        $menu->delete();

        return redirect()->route('cardapios.index');
    }
}

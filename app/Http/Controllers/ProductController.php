<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();

      return view('products.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
      $data = $request->validated();

      $data['establishment_id'] = \Auth::user()->establishment_id;

      $available = isset($data['is_available'])?'1':'0';

      $data['is_available'] = $available;

      $data['price'] = (int) ($data['price']*100);

      $product = Product::create($data);

      if($request->hasFile('image')){
        $imageFile = $request->file('image');

        $product->update([
          'image_path' => $imageFile->storeAs(
            "images/products/$product->id",
            'image.jpg',
            'public',
          )
        ]);
      }
      
      return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::where('id',$id)->first();

      return view('products.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(ProductRequest $request, $id)
    {
      $product = Product::where('id',$id)->first();

      $data = $request->validated();

      $data['price'] = (int) ($data['price']*100);

      $available = isset($data['is_available'])?'1':'0';

      $data['is_available'] = $available;

      $product->update($data);

      return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::where('id',$id)->first();

      $product->delete();

      return redirect()->route('produtos.index');
    }
}

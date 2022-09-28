<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Http\Requests\EstablishmentRequest;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::where('establishment_id', \Auth::user()->establishment_id)->get();

        return view('establishments.index', ['establishments'=>$establishments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstablishmentRequest $request)
    {
        $data = $request->validated();

        Establishment::create($data);

        return redirect()->route('estabelecimentos.index');
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

        return view('establishments.edit', ['establishment'=>$establishment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstablishmentRequest $request, $id)
    {
        $establishment = Establishment::where('id',$id)->first();

        $data = $request->validated();

        $establishment->update($data);

        return redirect()->route('estabelecimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $establishment = Establishmente::where('id',$id)->first();

        $establishment->delete();

        return redirect()->reoute('establecimentos.index');
    }
}

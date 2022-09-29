@extends('layout')
@section('title','Cardapios')
@section('content')
<div class="container p-3 m-3 mb-5 w-100 border border-dark bg-gradient bg-secondary text-dark">
  <div class="d-grid gap-2 col-6 mx-auto my-3">
    <h3 class="text-center col">Produtos do Cardápio "{{$menu->name}}"</h3>
    <div class="d-flex justify-content-center">
      <img src="{{asset('/storage/'.$menu->image_path)}}" width="50" height="60" alt="Sem Imagem">
    </div>
  </div>
  <a class="btn btn-dark col text-light" href="{{ route('home')}}">
    Voltar
  </a>

  <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
    <table class="table">
      <thead>
        <th scope="row">Produto</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Disponibilidade</th>
        <th>Imagem</th>
      </thead>
      <tbody class="table-group-divider" id="tablecardapios">
        @foreach ($menu->products as $product)
          <tr>
            <th scope="row">{{$product->name}}</th>
            <td>{{$product->description}}</td>
            <td>{{($product->price)/100}}</td>
            <td>@if ($product->is_available == 1) Disponível @else Indisponível @endif</td>
            <td><img src="{{asset('/storage/'.$menu->image_path)}}" width="50" height="60" alt="Sem Imagem"> </td>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

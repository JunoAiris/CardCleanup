@extends('layout')
@section('title','Cardapios')
@section('content')
<div class="container p-3 m-3 mb-5 w-100 border border-dark bg-gradient bg-secondary text-dark">
  <h3 class="text-center col">Produtos do Pedido da mesa {{$order->table_number}}</h3>
  <br>
  <a class="btn btn-dark col text-light" href="{{ route('pedidos.index')}}">
    Voltar
  </a>

  <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
    <table class="table">
      <thead>
        <th scope="row">Produto</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Disponibilidade</th>
      </thead>
      <tbody class="table-group-divider" id="tablepedidos">
        @foreach ($product as $product)
          <tr>
            <th scope="row">{{$product->name}}</th>
            <td>{{$product->description}}</td>
            <td>{{($product->price)/100}}</td>
            <td>@if ($product->is_available == 1) Disponível @else Indisponível @endif</td>
        @endforeach
      </tbody>
    </table>
   </div>
</div>
@endsection

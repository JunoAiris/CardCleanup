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

  <div class="content-justify-right mt-2 p-1 w-25">
    <form class="" action="{{route('OrderProductStore', $menu->id)}}" method="POST">
      @csrf
      <div class="d-flex">
        <label for="Adicionar novo produto:"></label>
        <select class="form-select" id="product_id" name="product_id">
          @foreach($addableProducts as $product)
            <option value="{{$product->id}}"> {{$product->name}} </option>
          @endforeach
        </select>
        <button type="submit" name="button" class="btn btn_outline_green rounded m-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00FF00" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
          </svg>
        </button>
      </div>
    </form>
  </div>

  <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
    <table class="table">
      <thead>
        <th scope="row">Produto</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Disponibilidade</th>
        <th>Remover</th>
      </thead>
      <tbody class="table-group-divider" id="tablecardapios">
        @foreach ($menu->products as $product)
          <tr>
            <th scope="row">{{$product->name}}</th>
            <td>{{$product->description}}</td>
            <td>{{($product->price)/100}}</td>
            <td>@if ($product->is_available == 1) Disponível @else Indisponível @endif</td>
            <td>
              <form class="" action="{{route('OrderProductStore', $menu->id)}}" method="POST">
                @csrf
                <button type="submit" name="button" class="btn btn_outline_green rounded m-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00FF00" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                  </svg>
                </button>
              </form>
            </td>
        @endforeach
      </tbody>
    </table>
   </div>
</div>
@endsection

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

  <div class="content-justify-right mt-2 p-1 w-25">
    <form class="" action="{{route('MenuProductStore', $menu->id)}}" method="POST">
      @csrf
        <label for="Adicionar novo produto:"></label>
        <select class="form-select" id="product_id" name="product_id">
          @foreach($addableProducts as $product)
            <option value="{{$product->id}}"> {{$product->name}} </option>
          @endforeach
        </select>
        <button type="submit" name="button" class="btn btn_success rounded">
        </button>
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
              <form class="" action="{{route('MenuProductDestroy', $menu->id, $product->id)}}" method="POST">
                @csrf
                <button type="submit" alt="Remover">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF0000" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
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

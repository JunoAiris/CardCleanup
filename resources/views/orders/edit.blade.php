@extends('layout')
@section('title', 'Pedidos')
@section('content')

  <div class="container-fluid p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark w-auto">

    <h3>Editar pedido</h3>
    <a class="btn btn-dark col text-light" href="{{ route('pedidos.index')}}">
      Voltar
    </a>

    <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded">
      <form method="POST" action="{{ route('pedidos.update', $order->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="mb-3">
            <label for="name" class="form-label">Mesa</label>
            <select class="form-select" aria-label="Selecionar Mesa" id="table_number" name="table_number">
              <option value="1" @if ($order->table_number == 1) selected @endif >Nº 1</option>
              <option value="2" @if ($order->table_number == 2) selected @endif >Nº 2</option>
              <option value="3" @if ($order->table_number == 3) selected @endif >Nº 3</option>
            </select>
            @error('table_number')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example" id="status" name="status">
              <option value="Em Espera" @if ($order->status == 'Em Espera') selected @endif >Em Espera</option>
              <option value="Em Progresso" @if ($order->status == 'Em Progresso') selected @endif >Em Progresso</option>
              <option value="A Entregar" @if ($order->status == 'A Entregar') selected @endif >A entregar</option>
              <option value="Completo" @if ($order->status == 'Completo') selected @endif >Completo</option>
            </select>
            @error('status')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror

          </div>

          <div class="mb-3 mt-2">
            <label for="price" class="form-label">Valor total</label>
            <input type="text" class="form-control" id="total_value" name="total_value" value="{{$order->total_value/100}}">
            @error('total_value')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="my-3">
          <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

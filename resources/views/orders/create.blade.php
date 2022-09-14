@extends('home')
@section('title','Registro de Pedido')
@section('content')

  <div class="container p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark">
    <div class="container">
      <h3>Registrar Pedido</h3>
      <a class="btn btn-dark col text-light" href="{{ route('pedidos.index')}}">
        Voltar
      </a>
    </div>

    <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded justify-content-evenly">
      <form method="POST" action="{{ route('pedidos.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="mb-3">
            <label for="name" class="form-label">Mesa</label>
            <select class="form-select" aria-label="Selecionar Mesa" id="table_number" name="table_number">
              <option value="1">Nº 1</option>
              <option value="2">Nº 2</option>
              <option value="3">Nº 3</option>
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
              <option value="Em Espera">Em Espera</option>
              <option value="Em Progresso">Em Progresso</option>
              <option value="A Entregar">A entregar</option>
              <option value="Completo">Completo</option>
            </select>
            @error('status')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3 mt-2">
            <label for="price" class="form-label">Valor total</label>
            <input type="text" class="form-control" id="total_value" name="total_value" value="{{ old('total_value') }}">
            @error('total_value')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

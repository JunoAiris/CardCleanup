@extends('layout')
@section('title','Adicionar produto')
@section('content')

  <div class="container-fluid p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark w-auto">

    <h3>Registro de produtos</h3>
    <a class="btn btn-dark col text-light" href="{{ route('produtos.index')}}">
      Voltar
    </a>

    <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded">
      <form method="POST" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="mb-3">
            <label for="inputAddress2" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="inputAddress2" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3 mt-2">
            <label for="inputAddress2" class="form-label">Preço (Em centavos)</label>
            <input type="text" class="form-control" id="price" name="price">
            @error('price')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="m-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_available" name="is_available" value="1">
            <label class="form-check-label" for="is_available">Disponivel?</label>
            @error('is_available')
            <div class="text-danger">
              {{ $message }}
            </div>
            @enderror

          </div>

          <div class="m-3 form-check">
            <label class="form-check-label" for="imgs">Adicionar uma imagem</label>
            <input type="file" name="image" class="form-control" accept="image/*">
          </div>
          @error('image')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror

          <div class="my-3">
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

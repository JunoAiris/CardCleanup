@extends('layout')
@section ('title', 'Produtos')
@section('content')

<div class="container-fluid p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark w-auto">

  <h3>Editar Produto: {{$product->name}}</h3>
  <a class="btn btn-dark col text-light mb-3" href="{{ route('produtos.index')}}">
    Voltar
  </a><br>
  <img src="{{asset('/storage/'.$product->image_path)}}" width="50" height="60" alt="Sem Imagem"></img>

  <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded">
    <form method="POST" action="{{ route('produtos.update', $product->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
          @error('name')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrição</label>
          <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
          @error('description')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror

        </div>

        <div class="mb-3 mt-2">
          <label for="price" class="form-label">Preço (Em centavos)</label>
          <input type="text" class="form-control" id="price" name="price" value="{{$product->price/100}}">
          @error('price')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="m-3 form-check">
          <input type="checkbox" class="form-check-input" id="is_available" name="is_available" value="1" @if ($product->is_available == 1) checked @endif>
          <label class="form-check-label" for="is_available">Disponivel?</label>
          @error('is_available')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="my-3 form-check">
          <label class="form-check-label" for="imgs">Modificar a imagem</label>
          <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
          @error('image')
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

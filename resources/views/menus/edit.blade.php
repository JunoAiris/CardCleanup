@extends('layout')
@section ('title', 'Cardapios')
@section('content')

<div class="container p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark">
  <div class="container">
    <h3>Editar produto</h3>
    <a class="btn btn-dark col text-light" href="{{ route('cardapios.index')}}">
      Voltar
    </a>
  </div>

  <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded justify-content-evenly">
    <form method="POST" action="{{ route('cardapios.update', $menu->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
          @error('name')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrição</label>
          <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
          @error('description')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="m-3 form-check">
          <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1">
          <label class="form-check-label" for="is_active">Disponivel?</label>
          @error('is_active')
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

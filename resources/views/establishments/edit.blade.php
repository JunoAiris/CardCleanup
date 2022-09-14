@extends('home')
@section ('title', 'Produtos')
@section('content')

<div class="container p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark">
  <div class="container">
    <h3 class="danger">Editar Estabelecimento</h3>
    <a class="btn btn-dark col text-light" href="{{ route('estabelecimentos.index')}}">
      Voltar
    </a>
  </div>

  <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded justify-content-evenly">
    <form method="POST" action="{{ route('estabelecimentos.update', $establishment->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3">
          <label for="company_name" class="form-label">Nome da Empresa</label>
          <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('name') }}">
          @error('company')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Razão Social</label>
          <input type="text" class="form-control" id="trading_name" name="trading_name" value="{{ old('trading_name') }}">
          @error('trading_name')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3 mt-2">
          <label for="price" class="form-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ old('cnpj') }}">
          @error('cnpj')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3 mt-2">
          <label for="price" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="adress" name="adress" value="{{ old('adress') }}">
          @error('adress')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3 mt-2">
          <label for="price" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
          @error('phone')
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

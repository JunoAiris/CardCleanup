@extends('layoutlogin')
@section('title','Adicionar produto')
@section('content')
  <div class="container p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark">
    <div class="container">
      <h3>Registro de produtos</h3>
      <a class="btn btn-dark col text-light" href="Edit_Produtos">
        Voltar
      </a>
    </div>

    <div class="d-flex p-3 m-3 border border-3 border-dark">
      <form class="w-100">
        <div class="row">
          <div class="col-2 input-group mb-3">
            <label for="inputAddress2" class="input-group-text">Nome</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
            <label for="inputAddress2" class="input-group-text">Custo</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
            <label for="inputAddress2" class="input-group-text">Ativo:</label>
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

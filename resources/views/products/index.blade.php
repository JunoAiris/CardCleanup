@extends('layoutlogin')
@section('title','Produtos')
@section('content')
  <div class="container p-3 m-3 mb-5 w-100 border border-dark bg-gradient bg-secondary text-dark">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h3 class="text-center col">Gerenciamento de Produtos</h3>
      <a class="btn btn-dark text-light col" href="{{ route('Produtos.create') }}">
        Adicionar novo produto
      </a>
    </div>

    <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
      <table class="table">
        <thead>
          <th>Produto</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Disponibilidade</th>
        </thead>
        <tbody class="table-group-divider" id="tablecardapios">
          @foreach ($products as $produto)
            <tr>
              <th>{{$produto->name}}</th>
              <td>{{$produto->description}}</td>
              <td>{{$produto->price}}</td>
              <td>{{$produto->is_available}}</td>
          @endforeach
        </tbody>
      </table>
     </div>
  </div>
@endsection

@extends('layout')
@section('title','Estabelecimentos')
@section('content')
  <div class="container p-3 m-3 mb-5 w-100 border border-dark bg-gradient bg-secondary text-dark">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h3 class="text-center col">Visualização do Estabelecimento</h3>
    </div>

    <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
      <table class="table">
        <thead>
          <th scope="row">Nome da Empresa</th>
          <th>Razão Social</th>
          <th>Endereço</th>
          <th>Telefone</th>
        </thead>
        <tbody class="table-group-divider" id="tablecardapios">
          @foreach ($establishments as $establishment)
            <tr>
              <th scope="row">{{$establishment->company_name}}</th>
              <td>{{$establishment->trading_name}}</td>
              <td>{{$establishment->adress}}</td>
              <td>{{$establishment->phone}}</td>
          @endforeach
        </tbody>
      </table>
     </div>
  </div>
@endsection

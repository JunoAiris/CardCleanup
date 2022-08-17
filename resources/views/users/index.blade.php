@extends('layoutlogin')
@section('title','Funcionários')
@section('content')
<div class="container border border-secondary rounded my-2 py-2 bg-dark bg-gradient">
  <div class="d-flex row justify-content-center">
    <div class="col-md-8">
      <table class="table table-bordered border-secondary my-1 py-1 text-light">
        <thead>
          <th scope="row">#</th>
          <td>Nome</td>
          <td>Email</td>
          <td>CPF</td>
          <td>Telefone</td>
          <td>Função</td>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($users as $user)
            <tr>
              <th scope="row">1</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->cpf}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->type == 'manager'?'Gerente':'Funcionário'}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

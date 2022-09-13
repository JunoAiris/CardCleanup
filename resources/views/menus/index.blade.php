@extends('layoutlogin')
@section('title','Cardapios')
@section('content')
  <div class="container p-3 m-3 mb-5 w-100 border border-dark bg-gradient bg-secondary text-dark">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h3 class="text-center col">Gerenciamento de Cardapios</h3>
      <a class="btn btn-dark text-light col" href="{{ route('cardapios.create') }}">
        Adicionar novo cardapio
      </a>
    </div>

    <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
      <table class="table">
        <thead>
          <th scope="row">Cardápio</th>
          <th>Descrição</th>
          <th>Status</th>
          <th>Criado em</th>
          <th>Ultima atualização</th>
          <th>Ver detalhes</th>
          <th>Editar</td>
          <th>Deletar</th>
        </thead>
        <tbody class="table-group-divider" id="tablecardapios">
          @foreach ($menus as $menu)
            <tr>
              <th scope="row">{{$menu->name}}</th>
              <td>{{$menu->description}}</td>
              <td>@if ($menu->is_active == 1) Ativo @else Inativo @endif</td>
              <td>{{$menu->created_at}}</td>
              <td>{{$menu->updated_at}}</td>
              <td>
                <a alt="Ver Detalhes" href="{{ route('cardapios.show', $menu->id)}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#505050" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </a>
              </td>
              <td>
                <a alt="Editar" href="{{ route('cardapios.edit', $menu->id)}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#505050" class="bi bi-brush" viewBox="0 0 16 16">
                    <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
                  </svg>
                </a>
              </td>
              <td>
                <form class="" action="{{ route('cardapios.destroy', $menu->id)}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" alt="Deletar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF0000" class="bi bi-trash3" viewBox="0 0 16 16">
                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                  </button>
                </form>
              </td>
          @endforeach
        </tbody>
      </table>
     </div>
  </div>
@endsection

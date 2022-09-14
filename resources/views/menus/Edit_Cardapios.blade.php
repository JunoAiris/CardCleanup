@extends('layout')
@section('title','Cardápios')
  <!-- Edit -->
  <div class="modal fade" id="modcardedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEdit" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content text-dark bg-gradient">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nome Cardápio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-between">
            <div class="p-1 mt-3">
              <label class="form-check-label" for="flexSwitchCheckDefault">Cardápio Ativo:</label>
              <input class="form-check-input" type="checkbox" role="switch" id="cardactive">
            </div>
            <div class="btn-group dropend p-1 m-2">
              <select class="form-select" aria-label="Default select example">
                <option selected>Escolha um produto a adicionar</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <input type="image" id="prodtocard" class="p-1 m-2" src="ico/check-square.svg" alt="Adicionar" width="32" height="32"></input>
            </div>
          </div>
          <div class="container border border-dark border-3 p-1 m-2">
            <table class="table">
              <thead>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Disponibilidade</th>
                <th>Remover</th>
              </thead>
              <tbody class="table-group-divider" id="tablecardapios">
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Confirmar Mudanças</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete -->
  <div class="modal fade" id="modcarddelete" tabindex="-1" aria-labelledby="ModalDelete" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content text-dark bg-gradient bg-light">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar Cardápio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Esse proccesso não pode ser desfeito, prosseguir?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Deletar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Create -->
  <div class="modal fade" id="modcardcreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content text-dark bg-gradient bg-light">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Criação de Cardápio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container p-1 m-2 row">
            <label for="cardname" class="col-form-label">Nome do Cardápio</label>
            <input type="text" id="cardname" class="form-control">
          </div>
          <div class="btn-group dropend p-1 m-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>Escolha um produto a adicionar</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <input type="image" id="prodtocard" class="p-1 m-2" src="ico/check-square.svg" alt="Adicionar" width="32" height="32"></input>
          </div>
          <div class="container border border-dark border-3 p-1 m-2">
            <table class="table">
              <thead>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Disponibilidade</th>
                <th>Remover</th>
              </thead>
              <tbody class="table-group-divider" id="tablecardapios">
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Registrar Cardápio</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

@section('content')
  <div class="container p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h3 class="col text-dark text-center">Gerenciamento de Cardápios</h3>
      <button type="button" class="btn btn-dark text-light col" data-bs-toggle="modal" data-bs-target="#modcardcreate">
        Criar novo Cardápio
      </button>
    </div>

    <div class="d-flex border border-3 border-dark bg-light bg-gradient text-dark bg-opacity-25">
      <table class="table">
        <thead>
          <th>Título</th>
          <th>Data de Criação</th>
          <th>Ativo</th>
          <th>Ver/Editar</th>
          <th>Remover</th>
        </thead>
        <tbody class="table-group-divider" id="tablecardapios">
          <tr>
            <th>Lorem ipsun</th>
            <td>fill date</td>
            <td><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/brush.svg" alt="edit" data-bs-toggle="modal" data-bs-target="#modcardedit"> </td>
            <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
          </tr>
          <tr>
            <th>Lorem ipsun</th>
            <td>fill date</td>
            <td><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/brush.svg" alt="edit" data-bs-toggle="modal" data-bs-target="#modcardedit"> </td>
            <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
          </tr>
          <tr>
            <th>Lorem ipsun</th>
            <td>fill date</td>
            <td><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/brush.svg" alt="edit" data-bs-toggle="modal" data-bs-target="#modcardedit"> </td>
            <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
          </tr>
          <tr>
            <th>Lorem ipsun</th>
            <td>fill date</td>
            <td><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/brush.svg" alt="edit" data-bs-toggle="modal" data-bs-target="#modcardedit"> </td>
            <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modcarddelete"> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

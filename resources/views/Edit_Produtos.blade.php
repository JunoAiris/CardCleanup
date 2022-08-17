@extends('layoutlogin')
@section ('title', 'Produtos')
  <!-- create -->
  <div class="modal fade" id="modaddproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content text-dark bg-gradient bg-light">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Criação de Cardápio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body mb-3">
          <div>
            <div class="col-auto">
              <label for="exampleInputEmail1" class="form-label">Nome:</label>
            </div>
            <div class="col-auto">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
            </div>
          </div>
          <div>
            <div class="col-auto"></div>
            <label for="exampleInputEmail1" class="form-label">Preço:</label>
          </div>
          <div class="col-auto">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
          </div>
        </div>
        <div>
          <div class="col-auto">
            <label for="exampleInputEmail1" class="form-label">Disponibilidade: <input class="form-check-input mx-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></label>
          </div>
          <div class="col-auto">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
          </div>
        </div>
        <div>
          <div class="col-auto">
            <label for="exampleInputEmail1" class="form-label">Descrição: </label>
          </div>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
        </div>
      </div>
      <div>
        <div class="col-auto">
          <label for="exampleInputEmail1" class="form-label">Imagem:</label>
        </div>
        <div class="col-auto">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
        </div>
      </div>
      <div>
        <div class="col-auto">
          <label for="exampleInputEmail1" class="form-label"><img src="" alt=""> </label>
        </div>
        <div class="col-auto">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Delete -->
  <div class="modal fade" id="modproddel" tabindex="-1" aria-labelledby="ModalDelete" aria-hidden="true">
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

  <!-- Edit -->
  <div class="modal fade" id="modprodedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEdit" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content text-dark bg-gradient">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nome Produto</h5>
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
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modproddel"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modproddel"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modproddel"> </td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>fill descript</td>
                  <td>fill price</td>
                  <td>fill value</td>
                  <td><img src="ico/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#modproddel"> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark text-light" data-bs-dismiss="modal">Confirmar Mudanças</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

@section('content')
  <!-- Visualizar -->
  <div class="modal fade" id="modprodview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modprodview">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container border border-dark border-3 p-1 m-2">
            <table class="table">
              <thead>
                <th>Produto</th>
                <th>Ingredientes</th>
                <th>Preço</th>
                <th>Disponibilidade</th>
              </thead>
              <tbody class="table-group-divider" id="tablecardapios">
                <tr>
                  <th>Lorem ipsun</th>
                  <td>Ingredientes A; B; C; D; E; F; G; H; I; J; K; L</td>
                  <td>fill price</td>
                  <td>Mark Avail</td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>Ingredientes A; B; C; D; E; F; G; H; I; J; K; L</td>
                  <td>fill price</td>
                  <td>Mark Avail</td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>Ingredientes A; B; C; D; E; F; G; H; I; J; K; L</td>
                  <td>fill price</td>
                  <td>Mark Avail</td>
                </tr>
                <tr>
                  <th>Lorem ipsun</th>
                  <td>Ingredientes A; B; C; D; E; F; G; H; I; J; K; L</td>
                  <td>fill price</td>
                  <td>Mark Avail</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container p-3 m-3 mb-5 w-100 border border-dark bg-gradient bg-secondary text-dark">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h3 class="text-center col">Gerenciamento de Produtos</h3>
      <a class="btn btn-dark text-light col" href="Criar_Produto">
        Adicionar novo produto
      </a>
    </div>

    <div class="container border border-dark border-3 p-1 mt-2 bg-light bg-gradient bg-opacity-25">
      <table class="table">
        <thead>
          <th>Produto</th>
          <th>Imagem</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th class="col-2">Disponibilidade</th>
          <th>Visualizar</th>
          <th>Editar</th>
          <th>Remover</th>
        </thead>
        <tbody class="table-group-divider" id="tablecardapios">
          <tr>
            <th>Lorem ipsun</th>
            <td>fill descript</td>
            <td><img src="potassium.png" width="50" height="50"></td>
            <td>fill price</td>
            <td><input class="form-check-input mx-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/info-square.svg" alt="Visualizar" data-bs-toggle="modal" data-bs-target="#modprodview"> </td>
            <td><img src="ico/brush.svg" alt="Editar" href="Criar_Produto"></td>
            <td><img src="ico/trash.svg" alt="Deletar" data-bs-toggle="modal" data-bs-target="#modproddel"> </td>
          </tr>
          <tr>
            <th>Lorem ipsun</th>
            <td>fill descript</td>
            <td><img src="potassium.png" width="50" height="50"></td>
            <td>fill price</td>
            <td><input class="form-check-input mx-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/info-square.svg" alt="Visualizar" data-bs-toggle="modal" data-bs-target="#modprodview"> </td>
            <td><img src="ico/brush.svg" alt="Editar" href="Criar_Produto"></td>
            <td><img src="ico/trash.svg" alt="Deletar" data-bs-toggle="modal" data-bs-target="#modproddel"> </td>
          </tr>
          <tr>
            <th>Lorem ipsun</th>
            <td>fill descript</td>
            <td><img src="potassium.png" width="50" height="50"></td>
            <td>fill price</td>
            <td><input class="form-check-input mx-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked=""></td>
            <td><img src="ico/info-square.svg" alt="Visualizar" data-bs-toggle="modal" data-bs-target="#modprodview"> </td>
            <td><img src="ico/brush.svg" alt="Editar" href="Criar_Produto"></td>
            <td><img src="ico/trash.svg" alt="Deletar" data-bs-toggle="modal" data-bs-target="#modproddel"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

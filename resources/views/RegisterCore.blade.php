@section('content')
  <div class="container mx-5 mb-3">
    <h2 class="mx-3">Registrar estabelecimento</h2>
    <div class="d-flex align-items-center mx-3">
      <br>
      <form method="POST">
        <div class="row g-3 align-items-center">
          <div class="col-auto ">
            <label for="cnpj" class="col-form-label">CNPJ:</label>
          </div>
          <div class="col-auto ">
            <input type="cnpj" id="cnpj" class="form-control" aria-describedby="CNPJ da empresa">
          </div>
        </div>
        <br>
        <div class="row g-3 align-items-center">
          <div class="col-auto ">
            <label for="rsocial" class="col-form-label">Razão Social</label>
          </div>
          <div class="col-auto ">
            <input type="text" id="rsocial" class="form-control" aria-describedby="Razão Social">
          </div>
        </div>
        <br>
        <div class="row g-3 align-items-center">
          <div class="col-auto ">
            <label for="cep" class="col-form-label">CEP:</label>
          </div>
          <div class="col-auto ">
            <input type="text" id="cep" class="form-control" aria-describedby="Endereço CEP">
          </div>
          <br>
          <div class="row g-3 align-items-center">
            <div class="col-auto ">
              <label for="numeroendereco" class="col-form-label">Número do Endereço:</label>
            </div>
            <div class="col-auto ">
              <input type="text" id="numeroendereco" class="form-control" aria-describedby="numeroendereco">
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="telefone" class="col-form-label">Telefone:</label>
              </div>
              <div class="col-auto ">
                <input type="text" id="Telefone" class="form-control" aria-describedby="Número de telefone">
              </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="ceo" class="col-form-label">Nome Gerente</label>
              </div>
              <div class="col-auto ">
                <input type="text" id="ceo" class="form-control" aria-describedby="ceo">
              </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="cpf" class="col-form-label">CPF gerente:</label>
              </div>
              <div class="col-auto ">
                <input type="text" id="cpf" class="form-control" aria-describedby="CPF">
              </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="telceo" class="col-form-label">Telefone Gerente:</label>
              </div>
              <div class="col-auto ">
                <input type="text" id="telceo" class="form-control" aria-describedby="telceo">
              </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="inputEmail6" class="col-form-label">Email:</label>
              </div>
              <div class="col-auto ">
                <input type="email" id="inputEmail6" class="form-control" aria-describedby="emailHelpInline">
              </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="inputPassword6" class="col-form-label">Senha:</label>
              </div>
              <div class="col-auto ">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
              </div>
              <div class="col-auto ">
                <span id="passwordHelpInline" class="form-text">
                  Senha deve ter de 8 a 20 caracteres
                </span>
              </div>
            </div>
            <br>
            <div class="row g-3 align-items-center">
              <div class="col-auto ">
                <label for="inputPasswordConfirm6" class="col-form-label">Confirme sua senha:</label>
              </div>
              <div class="col-auto ">
                <input type="passwordConfirm" id="inputPasswordConfirm6" class="form-control" aria-describedby="passwordConfirmHelpInline">
              </div>
              <div class="col-auto ">
                <span id="passwordConfirmHelpInline" class="form-text">
                  Deve ser identica a senha anterior
                </span>
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Confirmar</button>
      </form>
      <br><a href="UserLogin" style="color: #003399;">Clique aqui para retornar ao login</a>
    </div>
  </div>
@endsection

@extends('layout')

@section('content')
<div class="container-fluid p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark w-auto">

  <div class="container">
    <h3>Registro de Estabelecimento</h3>
    <a class="btn btn-dark col text-light" href="{{ route('cardapios.index')}}">
      Voltar
    </a>

    <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded">
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="row mb-3"><hr>Gerente</div>
          <div class="row"><hr></div>

          <div class="row mb-3">
            <label for="cnpj" class="col-md-4 col-form-label text-md-end">{{ __('Nome:') }}</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email:') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha:') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>

          <div class="row mb-3">
              <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF:') }}</label>

              <div class="col-md-6">
                  <input id="cpf" type="text" class="form-control" name="cpf">

                  @error('cpf')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone:') }}</label>

              <div class="col-md-6">
                  <input id="phone" type="text" class="form-control" name="phone">

                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <!-- Personal divider -->

          <div class="row mb-3"><hr>Empresa</div>
          <div class="row"><hr></div>

          <!-- Personal Divider -->

          <div class="row mb-3">
              <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome Fantasia:') }}</label>

              <div class="col-md-6">
                  <input id="company_name" type="text" class="form-control" name="company_name" >

                  @error('company_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <input id="type" type="hidden" class="form-control" name="type" value="manager">

          <div class="row mb-3">
              <label for="trading_name" class="col-md-4 col-form-label text-md-end">{{ __('Razão Social:') }}</label>

              <div class="col-md-6">
                  <input id="trading_name" type="text" class="form-control" name="trading_name" >

                  @error('trading_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="cnpj" class="col-md-4 col-form-label text-md-end">{{ __('CNPJ:') }}</label>

              <div class="col-md-6">
                  <input id="cnpj" type="text" class="form-control" name="cnpj" >

                  @error('cnpj')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="adress" class="col-md-4 col-form-label text-md-end">{{ __('Endereço:') }}</label>

              <div class="col-md-6">
                  <input id="adress" type="text" class="form-control" name="adress" >

                  @error('adress')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="company_phone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone Comercial:') }}</label>

              <div class="col-md-6">
                  <input id="company_phone" type="text" class="form-control" name="company_phone" >

                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

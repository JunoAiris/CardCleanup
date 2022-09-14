@extends('layout')
@section('title','Criar Usuário')
@section('content')
<div class="container p-3 m-3 mb-5 border border-dark bg-gradient bg-secondary text-dark">
  <div class="container">
    <h3>Registrar Usuário</h3>
    <a class="btn btn-dark col text-light" href="{{ route('user.index')}}">
      Voltar
    </a>
  </div>

  <div class="d-flex flex-row p-3 m-3 border border-3 border-dark bg-gradient bg-dark bg-opacity-25 rounded justify-content-evenly">
          <form method="POST" action="{{ route('user.store') }}">
              @csrf

              <div class="row mb-3">
                  <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

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
                  <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

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

              <div class="row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                  <div class="col-md-6">
                      <input id="cpf" type="text" class="form-control" name="cpf">
                  </div>
                  @error('cpf')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

              </div>

              <div class="row mb-3">
                  <label for="telefone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>

                  <div class="col-md-6">
                      <input id="phone" type="phone" class="form-control" name="phone">
                  </div>
                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

              </div>

              <div class="row mb-3">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                    <select class="form-select" aria-label="função" id="type" name="type">
                      <option value="manager">Funcionário</option>
                      <option value="staff">Gerente</option>
                    </select>
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

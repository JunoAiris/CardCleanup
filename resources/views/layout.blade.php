<!DOCTYPE html>
<html>
  <head>
    <meta name="Cardápio Virtual" content="" charset="utf-8">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'web') - Cardápio Virtual</title>
    <link rel="stylesheet" href="/css/juno.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body class="bg-secondary text-light mb-12">
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg bg-dark text-light">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="Cardapio">Cardápio Virtual</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link  text-light" href="cardapio">Cardápio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-light" href="pedido">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light disabled" href="Edit_Cardapios">Painel de Controle</a>
            </li>
          </ul>
        </div>
        <div>
          <ul class="navbar-nav">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link btn btn-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn btn-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('cardapio.index')}}">
                      {{ 'Painel de Controle' }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        @endguest
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- Navbar end -->
    @yield('content')
  </body>
</html>

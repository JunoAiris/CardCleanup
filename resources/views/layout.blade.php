<!DOCTYPE html>
<html>

<head>
  <meta name="Cardápio Virtual" content="" charset="utf-8">
  </meta>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield ('title', 'web') - Cardápio Virtual</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-secondary text-light">
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg bg-dark text-light">
    <div class="container-fluid">
      <a class="navbar-brand text-info" href="{{route('home')}}">Cardápio Virtual</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        @guest
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav bg-dark m-3">
              <li class="nav-item">
                <a class="nav-link  text-light" href="">Cardápio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="">Pedidos</a>
              </li>
            </ul>
          </div>
          <div class="container d-flex flex-wrap justify-content-end bg-dark m-3">
              @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @endif
          </div>
        @else
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav bg-dark m-3">
              <li class="nav-item">
                <a class="nav-link  text-light" aria-current="page" href="{{ route('cardapios.index')}}">Cardápios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="{{route('pedidos.index')}}">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="{{route('produtos.index')}}">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="{{route('user.index')}}">Funcionarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="{{route('estabelecimentos.index')}}">Estabelecimentos</a>
              </li>
            </ul>
          </div>
          <div class="container d-flex flex-wrap justify-content-end">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
              </li>
          </div>
          @endguest
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->
  @yield ('content')
</body>
</html>

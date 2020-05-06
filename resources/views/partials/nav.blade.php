{{-- <nav class="custom-wrapper" id="menu">
  <div class="pure-menu"></div>
  <ul class="container-flex list-unstyled">
    <li>
      <a href="{{ route('pages.welcome') }}"
        class="text-uppercase {{ setActiveRoute('pages.welcome') }}">
        Inicio
      </a>
    </li>

    <li>
      <a href="{{route('pages.about')}}"
        class="text-uppercase {{ setActiveRoute('pages.about') }}">
        Nosotros
      </a>
    </li>

    <li>
      <a href="{{route('pages.archive')}}"
        class="text-uppercase {{ setActiveRoute('pages.archive') }}">
        Archivo
      </a>
    </li>

    <li>
      <a href="{{route('pages.contact')}}"
        class="text-uppercase {{ setActiveRoute('pages.contact') }}">
        Contacto
      </a>
    </li>

    <li>
      <a href="{{ route('pages.home') }}"
        class="text-uppercase" {{ setActiveRoute('pages.home') }}>
        Blog
      </a>
    </li>

    <li>
      <a href="{{ route('register') }}" class="text-uppercase">
        Ingresa
      </a>
    </li>

  </ul>
</nav> --}}

{{-- <header class="contenedor-nav bg-light shadow">
  <div class="menu_bar">
    <a href="#" class="bt-menu"><span class="icon-menu"></span>CenterPage</a>
  </div>
  
  <nav class="container">
    <ul>
      <li><a style="color: black" href="/">CenterPage</a></li>
      <ul>
        <li><a href="#"><span class="icon-house"></span>Inicio</a></li>
        <li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
        <li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
        <li><a href="#"><span class="icon-mail"></span>Contacto</a></li>
      </ul>
    </ul>
  </nav>
</header> --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          CenterPage
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
              <li class="nav-item">
                <a href="{{ route('pages.welcome') }}"
                  class="nav-link {{ setActiveRoute('pages.welcome') }}">
                  Inicio
                </a>
              </li>

              <li class="nav-item">
                <a href="#servicios"
                  class="nav-link">
                  Servicios
                </a>
              </li>
          
              {{-- <li class="nav-item">
                <a href="{{route('pages.archive')}}"
                  class="nav-link {{ setActiveRoute('pages.archive') }}">
                  Archivo
                </a>
              </li> --}}
          
              {{-- <li class="nav-item">
                <a href="{{route('pages.contact')}}"
                  class="nav-link {{ setActiveRoute('pages.contact') }}">
                  Contacto
                </a>
              </li> --}}
          
              <li class="nav-item">
                <a href="{{ route('pages.home') }}"
                  class="nav-link" {{ setActiveRoute('pages.home') }}>
                  Blog
                </a>
              </li>
          
              {{-- <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">
                  Ingresa
                </a>
              </li> --}}
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item">
                    <a href="{{ route('pages.welcome') }}"
                      class="nav-link {{ setActiveRoute('pages.welcome') }}">
                      Inicio
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#servicios"
                      class="nav-link">
                      Servicios
                    </a>
                  </li>
              
                  <li class="nav-item">
                    <a href="{{ route('pages.home') }}"
                      class="nav-link" {{ setActiveRoute('pages.home') }}>
                      Blog
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>
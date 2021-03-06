

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary id="mainNavbar">

    <a class="navbar-brand" href="#">AUTH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbar">
            @if (Auth::user() != null)
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/user">
                        User
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/mensajes">
                        Mensajes
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/nuevo_mensaje">
                        Nuevo mensaje
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right ">
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-flag"></i>
                    Idioma
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Euskara</a>
                    <a class="dropdown-item active" href="#">Castellano</a>
                  </div>
                </li>
                <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <i class="fa fa-user-plus"></i>
                    {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/profile">Editar perfil</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                </li>
            @else
            <ul class="navbar-nav mr-auto">
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="#inicio">
                        Inicio
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right ">
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-flag"></i>
                    Idioma
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Euskara</a>
                    <a class="dropdown-item active" href="#">Castellano</a>
                  </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/login" data-target="#loginModal">
                        <i class="fa fa-sign-in"></i>
                        Login
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/register" data-target="#registerModal">
                        <i class="fa fa-user-plus"></i>
                        Registro
                    </a>
                </li>
            @endif
            </ul>
        </div>
    </div>
</nav>

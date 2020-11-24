<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between"> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Good Family</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Noticias<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item dropdown">

                @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bem vindo, {{$user->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/{{$user->user_type}}/consultar">Consultar</a>
                    <a class="dropdown-item" href="/{{$user->user_type}}/alterar">Alterar dados</a>
                    
                    @if($user->user_type == 'beneficiario')
                    <a class="dropdown-item" href="/beneficiario/historia">Sua história</a>
                    @endif

                    <a class="dropdown-item" href="/senha">Trocar senha</a>
                    <a class="dropdown-item text-danger" href="/logout">Sair</a>
                </div>
                @endauth

                @guest
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/login">Login</a>
                    <a class="dropdown-item" href="/registrar/apoiador">Quero ajudar</a>
                    <a class="dropdown-item" href="/registrar/beneficiario">Preciso de auxílio</a>
                </div>
                @endguest

            </li>
        </ul>
    </div>
</nav>
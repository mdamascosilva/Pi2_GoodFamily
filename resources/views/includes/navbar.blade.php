<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Good Family</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">

            @auth
            @if($user->user_type == 'beneficiario')
            <li class="nav-item active">
                <a class="nav-link" href="/necessidades/cadastrar">O que você precisa?<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/necessidades/listar">Minhas necessidades<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/necessidades/listar">Antedimentos<span class="sr-only">(current)</span></a>
            </li>
            @endif

            @if($user->user_type == 'apoiador')
            <li class="nav-item active">
                <a class="nav-link" href="/necessidades/consultar">Ajude alguém próximo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/atendimentos/listar">Meus atendimentos<span class="sr-only">(current)</span></a>
            </li>
            @endif
            @endauth

            <li class="nav-item">
                <a class="nav-link" href="/noticias"><small>Notícias</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contato"><small>Contato</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/quem-somos"><small>Sobre nós</small></a>
            </li>
        </ul>

        <span class="navbar-nav dropdown mr-5">
        
            @auth
            <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bem vindo, {{$user->nome}}</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                @if($user->user_type == 'beneficiario')
                <a class="dropdown-item" href="/beneficiario/historia">Sua história</a>
                @endif
                <a class="dropdown-item" href="/{{$user->user_type}}/alterar">Alterar dados</a>
                <a class="dropdown-item" href="/senha">Trocar senha</a>
                <a class="dropdown-item text-danger" href="/logout">Sair</a>
            </div>
            @endauth

            @guest
            <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/login/apoiador">Quero ajudar</a>
                <a class="dropdown-item" href="/login/beneficiario">Preciso de auxílio</a>
            </div>
            @endguest
        </span>
    </div>
</nav>
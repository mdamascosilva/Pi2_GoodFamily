<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Good Family</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body class="antialiased">
        <header>
            <h1>GOOD FAMILY</h1>
        </header>

        <div class="autenticacao">
            @if ($user ?? '')
                <p>Seja bem vindo, <a href="/{{$user->user_type}}/consultar">{{$user->name}}</a></p>
                <p><a href="/{{$user->user_type}}/alterar/{{$user->id}}">Alterar informações</a></p>
                <p><a href="/senha">Trocar senha</a></p>
                <p><a href="/logout">Sair</a></p>
            @else
                <p><a href="/login">Login</a></p>
                <p><a href="/registrar/apoiador">Quero ajudar</a></p>
                <p><a href="/registrar/beneficiario">Preciso de auxílio</a></p>
            @endif
        </div>

        <div class="menu">

            -----


            <p><a href="/beneficiario/cadastrar">Cadastrar beneficiario</a></p>
            <p><a href="/beneficiario/listar">Listar beneficiarios</a></p>
        </div>

        @if ($mensagem ?? '')
            <div class="alert alert-success">
                <ul>
                    <li> {{ $mensagem }} </li>
                </ul>
            </div>
        @endif

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         

        <title>Good Family</title>



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>


    <body class="antialiased">

    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">Noticias</a>
        <a href="#contact">Contato</a>
        <a href="#about">Sobre nós</a>
      </div>
      <nav id="nav" class="navbar navbar-fixed-top" data-spy="affix">
        <div class="container">
            <div class="navbar-header">
          <a href="#" class="navbar-brand">Brand</a>
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
          </a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
            <ul class="nav pull-right navbar-nav">
              <li>
               <a href="#">Link</a>
              </li>
            </ul>
          </div>        
        </div>
      </nav>
        <header>
            <h1>GOOD FAMILY</h1>
        </header>
       
        <input type="checkbox" id="chec">
    <label for="chec">
         <IMG src="/images/risco_menu.png">
    </label>
    <nav>
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
        </nav>
    </body>
</html>

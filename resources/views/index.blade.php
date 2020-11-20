@extends('layout')

@section('navbar')
@include('navbar', ['user' => $user])
@endsection

@section('cabecalho')
Good Family
@endsection

@section('conteudo')

@include('mensagem', ['mensagem' => $mensagem])

@include('errors', ['errors' => $errors])

<!--
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news"></a>
  <a href="#contact"></a>
  <a href="#about"></a>
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

  <p><a href="/necessidade/cadastrar">Cadastrar Necessidade</a></p>

  <div>

  </div>

</nav>
-->

@endsection
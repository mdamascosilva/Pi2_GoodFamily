@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Registrar-se
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

@include('includes.mensagem', ['mensagem' => $mensagem ?? ''])

<div class="form">
    <form action="/registrar/{{$opcao}}" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div>
            <label for="nome">Nome</label>
            <input type="nome" id="nome" name="nome">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="confirm">Confirmar Senha</label>
            <input type="password" id="confirm" name="confirm">
        </div>

        <div>
            <label for="remember">Lembrar-me</label>
            <input type="checkbox" id="remember" name="remember">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Registrar</button>
        </div>
    </form>
</div>
@endsection
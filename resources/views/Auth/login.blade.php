@extends('layout')

@section('navbar')
@include('navbar')
@endsection

@section('cabecalho')
Login
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

@include('mensagem', ['mensagem' => $mensagem ?? ''])

<div class="form">
    <form action="/login" method="POST">

        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="remember">Lembrar-me</label>
            <input type="checkbox" id="remember" name="remember">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </form>
</div>
@endsection
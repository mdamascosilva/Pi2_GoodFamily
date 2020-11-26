@extends('includes.layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

@include('includes.mensagem', ['mensagem' => $mensagem ?? ''])

<h2>Alterar senha</h2>
<div class="form">
    <form action="/senha" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="email" value="{{ $user->email }}">

        <div>
            <label for="senha_atual">Senha atual</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password">Nova senha</label>
            <input type="password" id="new_password" name="new_password">
        </div>

        <div>
            <label for="confirm">Confirmar nova senha</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Confirmar</button>
        </div>
    </form>
</div>
@endsection
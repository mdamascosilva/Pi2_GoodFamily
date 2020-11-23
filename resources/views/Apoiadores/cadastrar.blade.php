@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
<strong>Ótimo</strong><br />
Agora, precisamos de algumas informações para fazer o cadastro de apoiador
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

<div class="form">
    <form action="/apoiador/cadastrar" method="POST">

        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" value="{{ $user->name }}" name="nome">
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf">
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone">
        </div>

        @include('includes.form_endereco')

        <div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </form>
</div>


@endsection
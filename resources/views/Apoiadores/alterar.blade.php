@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Alterar dados cadastrados
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

<div class="form">
    @if ($apoiador)
    <form action="/apoiador/alterar" method="POST">

        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $apoiador->nome }}" />
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" value="{{ $apoiador->cpf }}" />
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ $apoiador->telefone }}" />
        </div>

        @include('includes.form_endereco', ['usuario' => $apoiador ])

        <div>
            <button type="submit" class="btn btn-default">Alterar</button>
        </div>
    </form>

    @endif
</div>

@endsection
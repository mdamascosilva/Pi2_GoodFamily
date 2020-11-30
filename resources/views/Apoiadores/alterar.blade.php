@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Alterar dados cadastrados
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">
    @if ($apoiador)
    <form action="/apoiador/alterar" method="POST">

        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $apoiador->nome }}" required>
                <div class="invalid-feedback">
                    Por favor informe seu nome
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $apoiador->cpf }}" required>
                <div class="invalid-feedback">
                    Por favor informe o CPF
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $apoiador->telefone }}" required>
                <div class="invalid-feedback">
                    Por favor informe um número de telefone
                </div>
            </div>
        </div>

        @include('includes.form_endereco', ['usuario' => $apoiador ])

        <button type="submit" class="btn btn-default">Alterar</button>

    </form>
    @endif
</div>

<script src="/js/validation.js"></script>

@endsection
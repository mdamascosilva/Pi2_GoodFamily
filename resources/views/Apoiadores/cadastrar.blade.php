@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
<strong>Ótimo</strong><br />
Agora, precisamos de algumas informações para fazer o cadastro de apoiador
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">
    <form class="needs-validation" novalidate action="/apoiador/cadastrar" method="POST">
        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $user->name }}" required>
                <div class="invalid-feedback">
                    Por favor informe seu nome
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
                <div class="invalid-feedback">
                    Por favor informe o CPF
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
                <div class="invalid-feedback">
                    Por favor informe um número de telefone
                </div>
            </div>

        </div>

        @include('includes.form_endereco')

        <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
</div>

<script src="/js/validation.js"></script>

@endsection
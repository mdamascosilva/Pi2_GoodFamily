@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Alterar senha
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

@include('includes.mensagem', ['mensagem' => $mensagem ?? ''])

<div class="form">
    <form class="needs-validation" novalidate action="/senha" method="POST">

        @csrf

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="password">Senha atual</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">
                    Por favor informe sua senha
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="new_password" class="text-left">Nova Senha</label>
                <input type="password" class="form-control" id="new_password" name="new_password" minlength="8" required>
                <div class="invalid-feedback">
                    Por favor informe sua senha (mínimo 8 caracteres)
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="confirm" class="text-left">Confirmar nova Senha</label>
                <input type="password" class="form-control" id="confirm" name="confirm" required>
                <div class="invalid-feedback">
                    Por favor informe a confirmação de sua senha
                </div>
            </div>
        </div>

        <button type="submit" class="btn col-md-1 btn-success">Alterar</button>
        <a href="/" class="btn col-md-1 btn-secondary" role="button" >Cancelar</a>
    </form>
</div>

<script src="/js/validation.js"></script>

@endsection
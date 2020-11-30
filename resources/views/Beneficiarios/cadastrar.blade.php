@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
<strong>Ótimo</strong><br />
Agora, precisamos de algumas informações para fazer o cadastro de beneficiário
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="form">
    <form class="needs-validation" novalidate action="/beneficiario/cadastrar" method="POST">
        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $user->name }}" required>
                <div class="invalid-feedback">
                    Por favor informe seu nome
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
                <div class="invalid-feedback">
                    Por favor informe um número de telefone
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="pais_origem">País de origem</label>
                <select class="custom-select" id="pais_origem" name="pais_origem" required>
                    <option selected disabled value=''>Selecione uma opção</option>
                    <option key="1" value="Haiti">Haiti</option>
                    <option key="2" value="Venezuela">Venezuela</option>
                    <option key="2" value="Bolivia">Bolivia</option>
                </select>
                <div class="invalid-feedback">
                    Por favor informe o seu país de orígem
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="documento">Nº de documento</label>
                <input type="text" class="form-control" id="documento" name="documento" required>
                <div class="invalid-feedback">
                    Informe o número de documento de seu país de orígem
                </div>
            </div>
        </div>

        @include('includes.form_endereco')

        <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
</div>

<script src="/js/validation.js"></script>

@endsection
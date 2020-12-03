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
    @if ($beneficiario)
    <form class="needs-validation" novalidate action="/beneficiario/alterar" method="POST">
        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{ $beneficiario->nome }}" disabled readonly>
            </div>


            <div class="col-md-6 mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $beneficiario->telefone }}" required>
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
            <script>document.getElementById('pais_origem').value = '<?php echo $beneficiario->pais_origem ?? '' ?>';</script>

            <div class="col-md-6 mb-3">
                <label for="documento">Nº de documento</label>
                <input type="text" class="form-control" id="documento" name="documento" value="{{ $beneficiario->documento }}" required>
                <div class="invalid-feedback">
                    Informe o número de documento de seu país de orígem
                </div>
            </div>
        </div>

        @include('includes.form_endereco', ['usuario' => $beneficiario ])
        
        <button type="submit" class="btn col-sm-2 btn-success">Alterar</button>
        <a href="/" class="btn col-sm-2 btn-secondary" role="button">Cancelar</a>


        
    </form>
    @endif
</div>

<script src="/js/validation.js"></script>

@endsection
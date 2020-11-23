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
    @if ($beneficiario)
    <form action="/beneficiario/alterar" method="POST">
        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $beneficiario->nome }}" />
        </div>

        <div>
            <label for="documento">Nº de documento</label>
            <input type="text" id="documento" name="documento" value="{{ $beneficiario->documento }}" />
        </div>

        <div>
            <label for="pais_origem">País de origem</label>
            <select id="pais_origem" name="pais_origem">
                <option selected disabled>Selecione uma opção</option>
                <option key="1" value="Haiti">Haiti</option>
                <option key="2" value="Venezuela">Venezuela</option>
                <option key="2" value="Bolivia">Bolivia</option>
            </select>
        </div>
        <script>document.getElementById('pais_origem').value = '<?php echo $beneficiario->pais_origem ?? '' ?>';</script>
        
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ $beneficiario->telefone }}" />
        </div>

        @include('includes.form_endereco', ['usuario' => $beneficiario ])

        <div>
            <input type="submit" class="btn btn-default" value="Alterar" />
        </div>
    </form>

    @endif
</div>

@endsection
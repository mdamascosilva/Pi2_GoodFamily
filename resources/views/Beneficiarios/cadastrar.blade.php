@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
<strong>Ótimo</strong><br/>
Agora, precisamos de algumas informações para fazer o cadastro de beneficiário
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

<div class="form">
    <form action="/beneficiario/cadastrar" method="POST">
        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" value="{{ $user->name }}" name="nome">
        </div>

        <div>
            <label for="documento">Nº de documento</label>
            <input type="text" id="documento" name="documento">
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
@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Beneficiário
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

@if ($beneficiario)

<div>
    <p>Nome</p>
    <p>{{ $beneficiario->nome }}</p>
</div>

<div>
    <p>Nº Documento</p>
    <p>{{ $beneficiario->documento }}</p>
</div>

<div>
    <p>Telefone</p>
    <p>{{ $beneficiario->telefone }}</p>
</div>

<div>
    <p>Endereço</p>
    <p>{{ $beneficiario->rua }}, {{ $beneficiario->complemento_endereco }}</p>
</div>

<div>
    <p>Cidade</p>
    <p>{{ $beneficiario->cidade }}</p>
</div>

<div>
    <p>UF</p>
    <p>{{ $beneficiario->uf }}</p>
</div>

<div>
    <p>CEP</p>
    <p>{{ $beneficiario->cep }}</p>
</div>

<div>                

    <form method="POST" 
        action="/beneficiario/excluir" 
        onsubmit="return confirm('Tem certeza que deseja remover sua conta, {{ addslashes($beneficiario->nome)}}?')">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
</div>

@endif

@endsection
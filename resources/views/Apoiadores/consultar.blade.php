@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Apoiador
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

<div class="form">
    @if ($apoiador)

    <div>
        <p>Nome</p>
        <p>{{ $apoiador->nome }}</p>
    </div>

    <div>
        <p>CPF</p>
        <p>{{ $apoiador->cpf }}</p>
    </div>

    <div>
        <p>Telefone</p>
        <p>{{ $apoiador->telefone }}</p>
    </div>

    <div>
        <p>Endereço</p>
        <p>{{ $apoiador->rua }}, {{ $apoiador->complemento_endereco }}</p>
    </div>

    <div>
        <p>Cidade</p>
        <p>{{ $apoiador->cidade }}</p>
    </div>

    <div>
        <p>UF</p>
        <p>{{ $apoiador->uf }}</p>
    </div>

    <div>
        <p>CEP</p>
        <p>{{ $apoiador->cep }}</p>
    </div>

    <div>
        <form method="POST" action="/apoiador/excluir" onsubmit="return confirm('Tem certeza que deseja remover sua conta, {{ addslashes($apoiador->nome)}}?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>

    @endif
</div>

@endsection
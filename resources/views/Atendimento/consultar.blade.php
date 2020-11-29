@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family - Apoiador
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

@foreach($atendimentos as $atendimento)

<div class="bloco">
    <div class="linha">
        <a href="/atendimentos/finalizar/{{ $atendimento->id }}">Finalizar atendimento</a>
    </div>

    <div class="linha">
        <p>Categoria</p>
        <p>{{ $atendimento->categoria }}</p>
    </div>

    <div class="linha">
        <p>Descrição</p>
        <p>{{ $atendimento->descricao }}</p>
    </div>

    <div class="linha">
        <p>Nome do Beneficiário</p>
        <p>{{ $atendimento->nome }}</p>
    </div>

    <div class="linha">
        <p>Endereço</p>
        <p>{{ $atendimento->rua }} {{ $atendimento->complemento_endereco }}, {{ $atendimento->bairro }}, {{ $atendimento->cidade }}</p>
    </div>

    <div class="linha">
        <p>História</p>
        <p>{{ $atendimento->historia }}</p>
    </div>

    <div class="linha">
        <form action="/atendimentos/cancelar/{{ $atendimento->id }}" method="POST" onsubmit="return confirm('Deseja realmente cancelar o atendimento?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancelar atendimento</button>
        </form>
    </div>
</div>
@endforeach

@endsection
@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Consultar necessidade
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

@foreach($necessidades as $necessidade)

<div class="bloco">
    <div class="linha">
        <a href="/necessidades/consultar/{{ $necessidade->id }}">
            Detalhes
        </a>
    </div>

    <div class="linha">
        <p>Categoria</p>
        <p>{{ $necessidade->categoria }}</p>
    </div>

    <div class="linha">
        <p>Descrição</p>
        <p>{{ $necessidade->descricao }}</p>
    </div>

    <div class="linha">
        <p>Nome do Beneficiário</p>
        <p>{{ $necessidade->nome }}</p>
    </div>

    <div class="linha">
        <p>Endereço</p>
        <p>{{ $necessidade->rua }} {{ $necessidade->complemento_endereco }}, {{ $necessidade->bairro }}, {{ $necessidade->cidade }}</p>
    </div>

    <div class="linha">
        <p>História</p>
        <p>{{ $necessidade->historia }}</p>
    </div>
</div>
@endforeach

@endsection
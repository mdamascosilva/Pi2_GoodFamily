@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family - Beneficiario
@endsection

@section('conteudo')

@include('includes.mensagem', ['mensagem' => $mensagem])

@include('includes.errors', ['errors' => $errors])

@if(false)

<div class="lista">
    @foreach($necessidades as $necessidade)

    <div class="bloco">
        <div class="linha">
            <a href="/necessidades/consultar">
                Ver detalhes
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
            <p>Bairro</p>
            <p>{{ $necessidade->bairro }}</p>
        </div>

        <div class="linha">
            <p>Cidade</p>
            <p>{{ $necessidade->cidade }}</p>
        </div>
    </div>

    <br />
    @endforeach
</div>

@endif

@endsection
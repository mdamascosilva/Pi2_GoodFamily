@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family - Apoiador
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<div class="lista">
    @foreach($atendimentos as $atendimento)

    <div class="bloco">
        <div class="linha">
            <a href="/atendimentos/consultar/{{ $atendimento->id }}">
                Ver detalhes
            </a>

            <div class="linha">
                <a href="/atendimentos/finalizar/{{ $atendimento->id }}">Finalizar atendimento</a>
            </div>
        </div>

        <div class="linha">
            <p>Data hora</p>
            <p>{{ $atendimento->inicio_atendimento }}</p>
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
            <p>Bairro</p>
            <p>{{ $atendimento->bairro }}</p>
        </div>

        <div class="linha">
            <p>Cidade</p>
            <p>{{ $atendimento->cidade }}</p>
        </div>
    </div>

    <br />
    @endforeach
</div>

@endsection
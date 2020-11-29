@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family - Apoiadores
@endsection

@section('conteudo')

@include('includes.mensagem', ['mensagem' => $mensagem])

@include('includes.errors', ['errors' => $errors])

<div>
    <h3>Bem vindo! Selecionamos algumas pessoas que precisam de auxílio próximas de você.</h3>
</div>

<div class="lista">
    @foreach($necessidades as $necessidade)

    <div class="bloco">
        <div class="linha">
            <a href="/necessidades/consultar/{{ $necessidade->id }}">
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

@endsection
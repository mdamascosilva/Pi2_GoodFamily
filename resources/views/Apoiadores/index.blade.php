@extends('includes.layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Algumas pessoas que precisam de você!
@endsection

@section('conteudo')

@include('mensagem', ['mensagem' => $mensagem])

@include('errors', ['errors' => $errors])

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
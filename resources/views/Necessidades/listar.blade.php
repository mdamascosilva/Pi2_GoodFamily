@extends('layout')

@section('navbar')
@include('navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Suas necessidades
@endsection

@section('conteudo')

@include('errors', ['errors' => $errors])

<div class="lista">
    @foreach($necessidades as $necessidade)

    <div class="bloco">
        <div class="linha">
            <a href="/necessidades/alterar/{{ $necessidade->id }}">
                Editar
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

        <form method="POST" action="/necessidades/excluir/{{ $necessidade->id }}" onsubmit="return confirm('Tem certeza que deseja excluir essa necessidade?')">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
    <br />
    @endforeach
</div>

@endsection
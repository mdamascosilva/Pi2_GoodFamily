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

<section class="pt-2 pb-2">
    <a class="btn btn-success" href="/necessidades/cadastrar">Nos informe o que você precisa</a>
</section>

<section class="pt-4 pb-2">
    <h2><a href="/necessidades/listar">Suas necessidades</a></h2>
</section>

<section class="pt-2 pb-2">
    <div class="container">
        <div class="row d-flex">
            @include('includes.small-card_necessidade', ['necessidades' => $necessidades, 'footer' => false])
        </div>
    </div>
</section>


@endsection
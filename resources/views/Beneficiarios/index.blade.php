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
    <h2><a class="text-info ml-4" href="/necessidades/listar">Suas necessidades</a></h2>
    <div class="container">
        <div class="row d-flex">
            @include('includes.small-card_necessidade', ['necessidades' => $necessidades, 'footer' => false])
        </div>
    </div>
</section>


@endsection
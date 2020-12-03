@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Bem vindo! Selecionamos algumas pessoas que precisam de auxílio próximas de você.
@endsection

@section('conteudo')

@include('includes.mensagem', ['mensagem' => $mensagem])

@include('includes.errors', ['errors' => $errors])

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row d-flex">
            @include('includes.card_necessidade', ['necessidades' => $necessidades, 'login' => true])
        </div>
    </div>
</section>

@endsection
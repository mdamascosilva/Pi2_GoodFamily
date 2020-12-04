@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Bem vindo! </br>
<h3>Selecionamos algumas pessoas que precisam de auxílio próximas de você.</h3>
@endsection

@section('conteudo')

@include('includes.mensagem', ['mensagem' => $mensagem])

@include('includes.errors', ['errors' => $errors])

<section class="pb-5">
    <div class="container">
        <div class="row d-flex">
            @include('includes.card_necessidade', ['necessidades' => $necessidades, 'login' => true])
        </div>
    </div>
</section>

@endsection
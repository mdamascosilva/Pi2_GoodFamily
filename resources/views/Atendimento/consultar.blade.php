@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Consultar um atendimento
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<section class="pt-2 pb-2">
    <div class="container">
        <div class="row d-flex">
            @include('includes.card_atendimento', ['atendimentos' => $atendimentos])
        </div>
    </div>
</section>

@endsection
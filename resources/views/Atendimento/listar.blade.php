@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Meus atendimentos
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row d-flex">
            @include('includes.small-card_atendimento', ['atendimentos' => $atendimentos])
        </div>
    </div>
</section>
@endsection
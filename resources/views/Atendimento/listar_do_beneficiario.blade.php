@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Minhas necessidades em atendimento
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row d-flex">
            @include('includes.small-card_atendimento', ['atendimentos' => $atendimentos, 'beneficiario' => true])
        </div>
    </div>
</section>
@endsection
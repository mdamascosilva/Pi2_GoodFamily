@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Suas necessidades
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])


<section class="pt-2 pb-2">
    <div class="container">
        <div class="row d-flex">
            @include('includes.small-card_necessidade', ['necessidades' => $necessidades, 'footer' => true])
        </div>
    </div>
</section>

@endsection
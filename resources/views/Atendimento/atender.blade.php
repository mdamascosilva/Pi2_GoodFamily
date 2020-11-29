@extends('includes.layout')

@section('navbar')
@include('includes.navbar', ['user' => Auth::user()])
@endsection

@section('cabecalho')
Good Family
@endsection

@section('conteudo')

@include('includes.errors', ['errors' => $errors])

<h3>Titulo</h3>

<div class="linha">
    <a href="/atendimentos/finalizar/{{ $id }}">Finalizar atendimento</a>
</div>

<div class="linha">
    <a href="/atendimentos/consultar/{{ $id }}">Consultar atendimento</a>
</div>

<div class="linha">
    <a href="/atendimentos/listar">Atendimentos pendentes</a>
</div>

<div>
    <a href="/necessidades/consultar">Procurar por mais pessoas que precisam de você</a>
</div>

@endsection